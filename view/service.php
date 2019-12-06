<?php
 include("../view/entete.php"); 
 include("../view/nav.php"); 
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron card card-block">
				<i>
					Accès Internet
				</i>
                                <br><br>
				<b>
				Les ligues disposent d'un accès Internet mutualisé que la M2L loue à un prestataire extérieur.
				</b>
                                <br><br>
                                <i>
                                   Accès Wifi 
                                </i>
                                <br><br>
                                <b>
                                    Dans tous les espaces, un réseau Wifi "visiteurs" est disponible, avec une clé WPA renouvelée régulièrement et communiquée aux ligues. Ce réseau ne permet que l'accès à Internet.
                                </b>
                                <br><br>
                                <i>
                                    Téléphonie
                                </i>
                                <br><br>
                                <b>
                                    Dans les bâtiments anciens A et B, les salles et bureaux sont équipés de prises de téléphone analogiques. La M2L y fournit les combinés téléphoniques. Dans les bâtiments neufs C et D, l'équipement téléphonique est de type VoIP. La M2L loue des postes téléphoniques IP aux ligues.
                                </b>
                                <br><br>
                                <i>
                                    Affranchissement
                                </i>
                                <br><br>
                                <b>
                                    Une machine à affranchir permet un affranchissement rapide et en nombre. Cette prestation est facturée aux ligues au coût de l'affranchissement. Chaque mois, on relie la machine à affranchir à une imprimante pour obtenir une liste de codes de gestion correspondant aux ligues associés à une quantité et un type d'affranchissement. La prise en compte de ces informations permet au CROSL d'éditer des factures.
                                </b>
                                <br><br>
                                <i>
                                    Impressions en volume et en qualité imprimerie
                                </i>
                                <br><br>
                                <b>
                                    Les ligues disposent de la possibilité d'imprimer sur des ressources d'impression numériques connectées situées dans le local reprographie du rez-de-chaussée dont l'usage fait l'objet d'une facturation à prix coûtant. Un système de comptage situé sur le serveur d'impression permet au CROSL d’effectuer une facturation mensuelle auprès des ligues.
                                </b>
                                <br><br>
                                <ul >
                                    <li>une photocopieuse noir et blanc à 70 pages/minute avec différents dispositifs de finition,</li>
                                    <li>une imprimante Laser couleur A4/A3 à encre solide à 25 pages/minute,</li>
                                    <li>un traceur A2 (1 page / minute) utilisé pour les affiches et banderoles.</li>
                                </ul>
                                <br><br>
                                <i>
                                    Serveur FTP documentaire
                                </i>
                                <br><br>
                                <b>
                                    La M2L met à disposition des ligues un serveur FTP documentaire intranet/internet regroupant des textes légaux, des modèles de dossiers, de statuts, des programmes de formation (...) compilés par le CROSL.
                                </b>
                                <br><br>
                                <i>
                                    Système de réservation des salles 
                                </i>
                                <br><br>
                                <b>
                                    La M2L met à disposition des ligues un site web de réservation des salles (réunions, amphithéâtre, restauration). Ce site est accessible en intranet, mais aussi depuis l'internet. Les réservations payantes sont facturées par la Région aux utilisateurs. L’administration de la M2L lui communique les informations nécessaires à cette facturation de façon hebdomadaire.
                                </b>
                                <br><br>
                                <i>
                                    Information sur le digicode du jour et la clé Wifi
                                </i>
                                <br><br>
                                <b>
                                    La M2L met à disposition des ligues un site web d'information sur le digicode permettant l'accès à la M2L ainsi que sur la clé Wifi "visiteurs". Le système de réservation donne également le digicode du jour dans le compte-rendu de réservation envoyé automatiquement par mail.
                                </b>
                                <br><br>
                                <i>
                                    Système de gestion des configurations
                                </i>
                                <br><br>
                                <b>
                                    M2L gère à travers un logiciel de gestion des configurations l'ensemble du parc informatique incluant les postes fixes des ligues.
                                </b>
                                <br><br>
                                <i>
                                    Intégration des postes informatiques des ligues
                                </i>
                                <br><br>
                                <b>
                                    Lorsque les ligues acquièrent du matériel informatique, il y a une phase obligatoire d'intégration qui consiste à :
                                </b>
                                <br><br>
                                <ul >
                                    <li>installer un antivirus affilié au serveur antiviral de la M2L,</li>
                                    <li>installer la dernière version de l'agent qui réalise l’inventaire matériel et logiciel</li>
                                    <li>paramétrer le poste en adressage IP automatique,</li>
                                    <li>installer un système de sauvegarde de données sur un site FTP de sauvegarde géré par la M2L,</li>
                                    <li>effectuer les dernières mises à jour systèmes et à paramétrer leur automatisation,</li>
                                    <li>paramétrer les noms des postes selon les règles de gestion suivantes :</li>
                                    <p>
                                        B[code bâtiment]E[numéro étage]L[numéro ligue]S[numéro salle].P[numéro poste]
                                        <br>
                                        <b>Code bâtiment </b> qui peut être A ou C
                                        <br>
                                        <b>N° étage</b> est compris entre 1 et 4 (puisque les locaux du rez-de-chaussée n'hébergent pas de ligues)
                                        <br>
                                        <b>N° ligue</b> sur 2 chiffres : correspond à un nombre attribué à la ligue allant pour l'instant de 01 à 24
                                        <br>
                                        <b>N° salle</b> sur 2 chiffres : correspond aux bureaux occupés par les ligues
                                        <br>
                                        <b>N° poste</b> sur 2 chiffres : correspond au numéro écrit sur la prise murale
                                        <br><br>
                                        Exemple : le nom d'hôte <b>BAE2L06S01P01</b> correspond au poste installé sur la prise N°1 du bureau A201 occupé par la ligue de Volley, bureau situé au deuxième étage du bâtiment A. 
                                    </p>
                                    <br><br>
                                    <b>
                                        Cette intégration est contractualisée. Les ligues et CD étant toutes des structures associatives indépendantes, leurs postes ne sont pas intégrés dans un annuaire central. Par contre, les postes de l'administration de la M2L et de la salle multimédia le sont.
                                    </b>
                                    <br><br>
                                    <i>
                                        Intégration d'imprimantes
                                    </i>
                                    <br><br>
                                    <b>
                                        Lorsque les structures hébergées s'équipent d'imprimante réseau, la connexion en est réalisée par l'informaticien bénévole du CROSL, sans passer par un serveur d'impression. Le nom de l'imprimante est lui aussi codifié de la même façon que celui des postes (la lettre L vient remplacer la lettre P).
                                    </b>
                                    <br><br>
                                    <i>
                                        Service d'établissement de bulletins de salaire
                                    </i>
                                    <br><br>
                                    <b>
                                        Le CRIB (Centre Régional d'Information des Bénévoles) est un label donné au CROSL qui, entre autres missions d'information (sur les textes réglementaires, la convention nationale du sport ...), propose un service d'établissement de bulletins de salaires aux ligues et à leurs clubs affiliés. Le CROSL est tiers de confiance pour l'URSSAF et, à ce titre, établit des bulletins de salaires réglementaires et tous les documents annexes. La prestation est facturée au forfait (60 € par an) et au bulletin édité (5 €). Un employé du CROSL est affecté à cette mission à raison de 0,8 ETP.
                                        <br><br>
                                        Illustration du processus pour une ligue qui fait établir ses bulletins de salaires par le CRIB, pour des animateurs à la vacation, comme pour ses employés permanents.
                                        <br><br>
                                        - La ligue établit une « déclaration unique d'embauche » et un contrat de travail.
                                        <br><br>
                                        - Les données "salaires" sont envoyées par les associations au CRIB avant le 15 du mois :
                                    </b>
                                    <ul id="point">
                                    <li> - Nom, prénom, date de naissance, adresse, n° de sécu, de l’intervenant ou du salarié</li>
                                    <li> - Dates et heures d'intervention (de jour / de nuit)</li>
                                    <li> - Heures congés payées associées</li>
                                    <li> - Taux horaire</li>
                                    <li> - Intitulé dans la grille de la convention nationale du sport (exemple : technicien niveau 3)</li>
                                </ul>
                                    <br><br>
                                    <b>
                                        En retour, le CRIB fournit le bulletin de salaire et le document sur les charges périodiques.
                                    </b>
                                    <br><br>
                                    <b>
                                        Le salaire est viré par la ligue, si celle-ci a fait ce choix. Sinon il y a un prélèvement sur son compte et virement sur le compte du salarié.
                                    </b>
                                    <br><br>
                                    <b>
                                        Pour les versements aux organismes sociaux, il y a prélèvement direct sur le compte de la ligue.
                                    </b>
                                    <br><br>
                                    <i>
                                        Formations
                                    </i>
                                    <br><br>
                                    <b>
                                        Le CROSL offre un catalogue diversifié de formations aux bénévoles des clubs affiliés aux ligues (législation, éthique, comptabilité associative, etc.). Les ligues organisent également des formations, en général plus techniques, sur l'usage de logiciels spécifiques de gestion des clubs ou des compétitions sportives.
                                    </b>
                                </ul>
		
			</div>
		</div>
	</div>
</div>

<?php
include("../view/footer.php"); 
?>
