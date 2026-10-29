<?php

include_once 'Seance.php';
include_once 'BilletPleinTarif.php';
include_once 'BilletEnfant.php';
include_once 'BilletReduit.php';

$seance = new Seance("16 décembre 2026", "20h30", "Dunesday");

$billetAdulte = new BilletPleinTarif(12, 23.5, $seance);
$billetEnfant = new BilletEnfant(11, 5, $seance, 9);
$billetEtudiant = new BilletReduit(42, 23.5, $seance, "carte étudiante");

echo("<h3>Billet adulte</h3>");
echo("Prix : ".number_format($billetAdulte->calculerPrix(), 2)." €<br>");
$billetAdulte->imprimerDetail();

echo("<h3>Billet enfant</h3>");
echo("Prix : ".number_format($billetEnfant->calculerPrix(), 2)." €<br>");
$billetEnfant->imprimerDetail();

echo("<h3>Billet étudiant</h3>");
echo("Prix : ".number_format($billetEtudiant->calculerPrix(), 2)." €<br>");
$billetEtudiant->imprimerDetail();