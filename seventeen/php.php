<?php
session_start();

// --- LOGICA PHP ---

// 1. Reset completo
if (isset($_POST['reset_game'])) {
    session_destroy();
    session_start();
    header("Refresh:0"); 
    exit();
}

// 2. Inizializzazione variabili
if (!isset($_SESSION['started'])) { $_SESSION['started'] = false; }
if (!isset($_SESSION['totale'])) { $_SESSION['totale'] = 0; }
if (!isset($_SESSION['vittorie'])) { $_SESSION['vittorie'] = 0; }
if (!isset($_SESSION['msg'])) { $_SESSION['msg'] = ""; }
if (!isset($_SESSION['round_over'])) { $_SESSION['round_over'] = false; }

// 3. Avvio del gioco
if (isset($_POST['start'])) {
    $_SESSION['started'] = true;
    $_SESSION['msg'] = "Iniziamo! Pesca la prima carta.";
}

// 4. Nuova Manche
if (isset($_POST['next_round'])) {
    $_SESSION['totale'] = 0;
    $_SESSION['round_over'] = false;
    $_SESSION['msg'] = "Nuova mano! A te la mossa.";
}

// 5. Azione: PESCA
if (isset($_POST['pesca']) && !$_SESSION['round_over']) {
    
    // --- LOGICA CARTE ALTE ---
    if ($_SESSION['totale'] == 0) {
        // È la prima carta: numero normale (1-10)
        $carta = rand(1, 10);
    } else {
        // Dalla seconda carta in poi: numeri più alti (es. 4-10)
        // Così il rischio di arrivare a 17 o superarlo aumenta
        $carta = rand(4, 10); 
    }

    $_SESSION['totale'] += $carta;

    // --- CONTROLLO SCONFITTA ---
    
    // CASO 1: ESATTAMENTE 17
    if ($_SESSION['totale'] == 17) {
        $_SESSION['msg'] = "Hai pescato un <strong>$carta</strong>.<br>Totale: " . $_SESSION['totale'] . "<br><span style='color:red; font-weight:bold; font-size:20px;'>LA SFORTUNA TI HA RAGGIUNTO</span>";
        $_SESSION['round_over'] = true; 
    
    // CASO 2: MAGGIORE DI 17 (SBALLATO)
    } elseif ($_SESSION['totale'] > 17) {
        $_SESSION['msg'] = "Hai pescato un <strong>$carta</strong>.<br>Totale: " . $_SESSION['totale'] . "<br><span style='color:red; font-weight:bold;'>Aia! Hai perso.</span>";
        $_SESSION['round_over'] = true;
    
    // CASO 3: GIOCO CONTINUA
    } else {
        $_SESSION['msg'] = "Hai pescato un <strong>$carta</strong>.<br>Il tuo totale è: <strong>" . $_SESSION['totale'] . "</strong>";
    }
}

// 6. Azione: STOP
if (isset($_POST['stop']) && !$_SESSION['round_over']) {
    if ($_SESSION['totale'] > 0) {
        $_SESSION['vittorie']++;
        $_SESSION['msg'] = "Ti sei fermato a " . $_SESSION['totale'] . ".<br><span style='color:green; font-weight:bold;'>Bravo! puoi continuare.</span>";
        $_SESSION['round_over'] = true;
    } else {
        $_SESSION['msg'] = "0 non è un opzione.";
    }
}
$ha_vinto_tutto = ($_SESSION['vittorie'] >= 3);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gioco del 17</title>
        <!-- Collegamento al file CSS esterno -->
        <link rel="stylesheet" href="css.css">
    </head>
    <body>

        <header>
            <h1>Benvenuto in questo Sito Web!</h1>
            <div class="tab1">
                <p class="intro">
                    Alla ricerca di qualcosa per far passare la noia? Sei nella pagina giusta! Facciamo un gioco: 
                    Ad ogni turno avremo delle carte con dei numeri. Il totale deve essere tra 12 e 16 e ATTENZIONE! Se hai 
                    come totale 17, è fallimento instantaneo. Se vinci tre partite avrai un premio!
                </p>
            </div>
        </header>

        <!-- ZONA DI GIOCO (TAB2) -->
        <div class="tab2">
            
            <?php if ($ha_vinto_tutto): ?>
                <div class="premio-box">
                    <h1> PREMIO RICEVUTO! <BR>HAI VINTO LA GLORIA!! </h1>
                    <p style="color: black; font-size: 20px;">Congratulazioni. La Sfortuna non ti ha raggiunto</p>
                    <img src="https://media.tenor.com/MIP2p_k1-QcAAAAM/party-popper-joypixels.gif" style="width:150px;">
                    <br>
                    <form method="post">
                        <button type="submit" name="reset_game">Ricomincia tutto</button>
                    </form>
                </div>

            <?php elseif (!$_SESSION['started']): ?>
                <!-- CASO 2: GIOCO NON ANCORA INIZIATO -->
                <img src="https://img.freepik.com/vettori-premium/scala-reale-nei-cuori-carte-da-gioco-poker-illustrazione-di-incisione-vintage-nera-vettoriale-per-poster-etichetta-banner-web-isolato-su-sfondo-bianco_171932-1477.jpg?semt=ais_hybrid&w=740&q=80">
                <br>
                <form method="post">
                    <button type="submit" name="start">Let's Begin!</button>
                </form>

            <?php else: ?>
                <!-- CASO 3: PARTITA IN CORSO -->
                <div class="stats">
                    Vittorie: <strong><?php echo $_SESSION['vittorie']; ?></strong> / 3
                </div>
                
                <div class="msg">
                    <?php echo $_SESSION['msg']; ?>
                </div>

                <form method="post">
                    <?php if (!$_SESSION['round_over']): ?>
                        <button type="submit" name="pesca">Pesca</button>
                        <button type="submit" name="stop">Stop</button>
                    <?php else: ?>
                        <?php if ($_SESSION['totale'] >= 17): ?>
                             <button type="submit" name="next_round" style="background-color:#ffcccb;">Riprova mano</button>
                        <?php else: ?>
                             <button type="submit" name="next_round" style="background-color:#ccffcc;">Prossima mano</button>
                        <?php endif; ?>
                    <?php endif; ?>
                </form>

                <br>
                <form method="post">
                    <button type="submit" name="reset_game" style="font-size: 12px; padding: 5px 10px; background: #ddd;">Reset gioco</button>
                </form>
            <?php endif; ?>

        </div>
    </body>
</html>