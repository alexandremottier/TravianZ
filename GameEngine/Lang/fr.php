<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANZ                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianZ)                                 //
//                              - TravianZ = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//                                Adding tasks, constructions and artefact  by: Armando             //
//                                Modified , added , fixed , implementd  by: Shadow and ronix       //
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//         ENGLISH         //
									//      Author: Dzoki      //
									//     Adding: Armando     //
									/////////////////////////////

//MAIN MENU
define("TRIBE1","Romains");
define("TRIBE2","Teutons");
define("TRIBE3","Gaulois");
define("TRIBE4","Nature");
define("TRIBE5","Natars");
define("TRIBE6","Monstres");

define("HOME","Accueil");
define("INSTRUCT","Instructions");
define("ADMIN_PANEL","Administration");
define("MASS_MESSAGE","Message global");
define("LOGOUT","Déconnexion");
define("PROFILE","Profil");
define("SUPPORT","Support");
define("UPDATE_T_10","Mettre à jour Top 10");
define("SYSTEM_MESSAGE","Message système");
define("TRAVIAN_PLUS","Travian <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");
define("CONTACT","Contactez-nous !");
define("GAME_RULES","Règles du jeu");

//MENU
define("REG","Rejoindre");
define("FORUM","Forum");
define("CHAT","Chat");
define("IMPRINT","Impression");
define("MORE_LINKS","Liens additionnels");
define("TOUR","Visite guidée du jeu");


//ERRORS
define("USRNM_EMPTY","(Nom d'utilisateur vide)");
define("USRNM_TAKEN","(Nom d'utilisateur déjà pris.)");
define("USRNM_SHORT","(min. ".USRNM_MIN_LENGTH." caractères)");
define("USRNM_CHAR","(Caractères invalides)");
define("PW_EMPTY","(Mot de passe vide)");
define("PW_SHORT","(min. ".PW_MIN_LENGTH." caractères)");
define("PW_INSECURE","(Mot de passe trop simple. Veuillez en choisir un plus difficile.)");
define("EMAIL_EMPTY","(Adresse mail vide)");
define("EMAIL_INVALID","(Adresse mail invalide.)");
define("EMAIL_TAKEN","(Cette adresse mail est déjà utilisée)");
define("TRIBE_EMPTY","<li>Veuillez choisir une tribu.</li>");
define("AGREE_ERROR","<li>Vous devez accepter les règles du jeu et les conditions d'utilisation pour continuer.</li>");
define("LOGIN_USR_EMPTY","Entrez un nom.");
define("LOGIN_PASS_EMPTY","Entrez un mot de passe.");
define("EMAIL_ERROR","L'adresse mail ne correspond pas à celle existante");
define("PASS_MISMATCH","Les mots de passe ne sont pas identiques");
define("ALLI_OWNER","Veuillez nommer un propriétaire d'alliance avant de supprimer");
define("SIT_ERROR","Le compte est banni ou le joueur est introuvable");
define("USR_NT_FOUND","Ce nom d'existe pas.");
define("LOGIN_PW_ERROR","Mot de passe incorrect.");
define("WEL_TOPIC","Astuces utiles & informations");
define("ATAG_EMPTY","Tag vide");
define("ANAME_EMPTY","Nom vide");
define("ATAG_EXIST","Tag déjà pris");
define("ANAME_EXIST","Nom déjà pris");
define("ALREADY_ALLY_MEMBER","Vous êtes déjà dans une alliance");
define("ALLY_TOO_LOW", "Vous devez avoir une ambassade de niveau 3 ou plus.");
define("USER_NOT_IN_YOUR_ALLY","Cet utilisateur n'est pas dans votre alliance !");
define("CANT_EDIT_YOUR_PERMISSIONS","Vous ne pouvez pas modifier vos propres permissions !");
define("CANT_EDIT_LEADER_PERMISSIONS","Les droits du leader de l'alliance ne peuvent être modifiés");
define("NO_PERMISSION", "Vous n'avez pas de droits suffisants !");
define("NAME_OR_DIPL_EMPTY", "Nom ou diplomatie vide");
define("ALLY_DOESNT_EXISTS","L'alliance n'existe pas");
define("CANNOT_INVITE_SAME_ALLY","Vous ne pouvez pas inviter votre propre alliance !");
define("WRONG_DIPLOMACY","Mauvais choix effectué");
define("INVITE_ALREADY_SENT","Soit vous avez déjà envoyé un pacte à cette alliance, ils l'ont envoyé à la vôtre, soit vous avez déjà un pacte avec eux.");
define("INVITE_SENT","Invitation envoyée");
define("DECLARED_WAR_ON","guerre déclarée contre");
define("OFFERED_NON_AGGRESION_PACT_TO","a proposé un pacte de non-agression à");
define("OFFERED_CONFED_TO","a proposé une confédération à");
define("ALLY_TOO_MUCH_PACTS","Soit vous ne pouvez pas offrir plus de pactes de ce type, soit cette alliance a atteint la limite pour ce type de pactes.");
define("ALLY_PERMISSIONS_UPDATED","Permissions mises à jour");
define("ALLY_FORUM_LINK_UPDATED", "Lien du forum mis à jour");
define("NO_FORUMS_YET","Il n'y a pas encore de forum.");
define("ALLY_USER_KICKED"," a été banni de l'alliance");
define("NOT_OPENED_YET","Le serveur n'a pas encore démarré.");
define("REGISTER_CLOSED","La création de compte est fermée. Vous ne pouvez pas vous enregistrer sur ce serveur.");
define("NAME_EMPTY","Veuillez insérer le nom");
define("NAME_NO_EXIST","Il n'y a pas d'utilisateur avec le nom ");
define("ID_NO_EXIST","Il n'y a pas d'utilisateur avec l'id ");
define("SAME_NAME","Vous ne pouvez pas vous inviter");
define("ALREADY_INVITED"," a déjà été invité");
define("ALREADY_IN_ALLY"," est déjà dans cette alliance");
define("ALREADY_IN_AN_ALLY"," est déjà dans une alliance");
define("NAME_OR_TAG_CHANGED","Changement de nom ou d'étiquette effectué");
define("VAC_MODE_WRONG_DAYS","Vous avez inséré un mauvais nombre de jours");

//COPYRIGHT
define("TRAVIAN_COPYRIGHT","TravianZ 100% Open Source Travian Clone.");

//BUILD.TPL
define("CUR_PROD","Production actuelle");
define("NEXT_PROD","Production au niveau ");
define("CONSTRUCT_BUILD","Construire le bâtiment");

//BUILDINGS
define("B1","Bûcheron");
define("B1_DESC","Le bûcheron coupe des arbres afin de produire du bois. Plus vous améliorez le bûcheron, plus il produit de bois.");
define("B2","Puits d'argile");
define("B2_DESC","L'argile est produite ici. En augmentant son niveau, vous augmentez sa production d'argile.");
define("B3","Mine de fer");
define("B3_DESC","Les mineurs y produisent la précieuse ressource qu'est le fer. En augmentant le niveau de la mine, vous augmentez sa production de fer.");
define("B4","Champs de céréales");
define("B4_DESC","La nourriture de votre population est produite ici. En augmentant le niveau de la ferme, vous augmentez sa production.");

//DORF1
define("LUMBER","Bois");
define("CLAY","Argile");
define("IRON","Fer");
define("CROP","Céréales");
define("LEVEL","Niveau");
define("CROP_COM",CROP." consommation");
define("PER_HR","par heure");
define("PROD_HEADER","Production");
define("MULTI_V_HEADER","Villages");
define("ANNOUNCEMENT","Annonces");
define("GO2MY_VILLAGE","Visiter mon village");
define("VILLAGE_CENTER","Centre du village");
define("FINISH_GOLD","Terminer immédiatement toutes les commandes de construction et de recherche dans ce village pour 2 Or ?");
define("WAITING_LOOP","(waiting loop)");
define("CROP_NEGATIVE","Votre production agricole est négative, vous n'atteindrez jamais le montant des ressources demandées.");
define("HRS","(heures)");
define("DONE_AT","achevé à");
define("CANCEL","annuler");
define("LOYALTY","Loyauté");
define("CALCULATED_IN","Calculé en");
define("SEVER_TIME","Heure du serveur :");
define("HI","HI");
define("P_IN","dans");

//QUEST
define("Q_CONTINUE","Passer à la tâche suivante.");
define("Q_REWARD","Votre récompense :");
define("Q_BUTN","tâche complète");
define("Q0","Bienvenue à ");
define("Q0_DESC","Comme je vois que vous avez été nommé chef de ce petit village. Je serai votre conseiller les premiers jours et je ne quitterai jamais votre côté (droit).");
define("Q0_OPT1","Vers la première tâche.");
define("Q0_OPT2","Regarder autour de vous.");
define("Q0_OPT3","Ne jouer aucune tâche.");

define("Q1","Tâche 1 : Bûcheron");
define("Q1_DESC","Il y a quatre forêts vertes autour de votre village. Construisez un bûcheron sur l'un d'eux. Le bois est une ressource importante pour notre nouvelle colonie.");
define("Q1_ORDER","Mission :<\/p>Construire un bûcheron.");
define("Q1_RESP","Oui, de cette façon, vous gagnez plus de bois. J'ai aidé un peu et j'ai terminé la commande instantanément.");
define("Q1_REWARD","Bûcheron immédiatement terminé.");

define("Q2","Tâche 2 : Cultiver");
define("Q2_DESC","Maintenant, vos sujets ont faim d'avoir travaillé toute la journée. Étendez une terre cultivée pour améliorer l'approvisionnement de vos sujets. Revenez ici une fois le bâtiment terminé.");
define("Q2_ORDER","Mission :<\/p>Agrandir un champ de céréales.");
define("Q2_RESP","Très bien. Maintenant, vos sujets ont à nouveau assez à manger...");
define("Q2_REWARD","Votre récompense :<\/p>1 jour Travian Plus");

define("Q3","Tâche 3 : Nom de votre village");
define("Q3_DESC","Créatif comme vous êtes, vous pouvez donner à votre village le nom ultime.<br \/><br \/>Cliquez sur 'Profil' dans le menu de gauche puis sélectionnez 'modifier le profil'...");
define("Q3_ORDER","Mission :<\/p>Changez le nom de votre village en quelque chose de sympa.");
define("Q3_RESP","Wow, un super nom pour leur village. Ça aurait pu être le nom de mon village !...");

define("Q4","Tâche 4 : Autres joueurs");
define("Q4_DESC","Sur ". SERVER_NAME ." vous jouez avec d'autres joueurs. Cliquez sur 'statistiques' dans le menu du haut pour consulter votre classement et saisissez-le ici.");
define("Q4_ORDER","Mission :<\/p>Cherchez votre rang dans les statistiques et entrez-le ici.");
define("Q4_BUTN","tâche complète");
define("Q4_RESP","Exactement ! C'est votre rang.");

define("Q5","Tâche 5 : Deux ordres de construction");
define("Q5_DESC","Construire une mine de fer et une carrière d'argile. De fer et d'argile on n'en a jamais assez.");
define("Q5_ORDER","Mission :<\/p><ul><li>Agrandir une mine de fer.<\/li><li>Agrandir une fosse d'argile.<\/li><\/ul>");
define("Q5_RESP","Comme vous l'avez remarqué, les commandes de construction prennent assez de temps. Le monde de". SERVER_NAME ." continuera à tourner même si vous êtes hors ligne. Même dans quelques mois, il y aura beaucoup de nouvelles choses à découvrir.<br \/><br \/>La meilleure chose à faire est de vérifier de temps en temps votre village et de vous donner de nouvelles tâches à faire.");

define("Q6","Tâche 6 : Messages");
define("Q6_DESC","Vous pouvez parler à d'autres joueurs en utilisant le système de messagerie. Je vous ai envoyé un message. Lisez-le et revenez ici.<br \/><br \/>P.S. N'oubliez pas : à gauche les rapports, à droite les messages.");
define("Q6_ORDER","Mission :<\/p>Lisez votre nouveau message.");
define("Q6_RESP","Vous l'avez reçu? Parfait.<br \/><br \/>Voici de l'or. Avec de l'or, vous pouvez accélérer la construction et l'évolution de vos bâtiments.");
define("Q6_RESP1","-Comptabiliser ou augmenter votre production de ressources. Pour cela cliquez");
define("Q6_RESP2","dans le menu de gauche.");
define("Q6_SUBJECT","Message du Maître des Tâches");
define("Q6_MESSAGE","Vous devez être informé qu'une belle récompense vous attend chez le maître des tâches.<br /><br />Info : Le message a été généré automatiquement. Une réponse n'est pas nécessaire.");

define("Q7","Tâche 7 : Un chacun !");
define("Q7_DESC","Maintenant, nous devrions augmenter un peu votre production de ressources. Construisez un bûcheron supplémentaire, une carrière d'argile, une mine de fer et un champ de céréales au niveau 1.");
define("Q7_ORDER","Mission :<\/p>Étendre une tuile supplémentaire de chaque ressource au niveau 1.");
define("Q7_RESP","Très bien, bon développement de la production de ressources.");

define("Q8","Tâche 8 : Une énorme armée !");
define("Q8_DESC","Maintenant, j'ai une quête très spéciale pour vous. J'ai faim. Donnez-moi 200 unités de céréales !<br \/><br \/>En retour, j'essaierai d'organiser une énorme armée pour protéger votre village.");
define("Q8_ORDER","Mission :<\/p>Envoyer 200 unités de céréales au Maître des Tâches");
define("Q8_BUTN","Envoyer les céréales");
define("Q8_NOCROP","Pas assez de céréales !");

define("Q9","Task 9: Tout à 1.");
define("Q9_DESC","Sur Travian, il y a toujours quelque chose à faire ! Pendant que vous attendez l'arrivée de l'énorme armée, nous devrions maintenant augmenter un peu votre production de ressources. Étendez toutes vos tuiles de ressources au niveau 1.");
define("Q9_ORDER","Mission :<\/p>Étendre toutes les tuiles de ressources au niveau 1.");
define("Q9_RESP","Très bien, votre production de ressources est florissante. <br \/><br \/>Bientôt, nous commencerons à construire des bâtiments dans le village.");

define("Q10","Tâche 10 : Colombe de la Paix");
define("Q10_DESC","Les premiers jours après votre inscription, vous êtes protégé contre les attaques de vos camarades de jeu. Vous pouvez voir combien de temps dure cette protection en ajoutant le code <b>[#0]<\/b> à votre profil.");
define("Q10_ORDER","Mission :<\/p>Ajoute le code <b>[#0]<\/b> dans votre profil en l'ajoutant à l'un des deux champs de description.");
define("Q10_RESP","Bien joué ! Maintenant tout le monde peut voir par quel grand guerrier le monde est approché.");
define("Q10_REWARD","Votre récompense :<\/p>2 jours Travian Plus");

define("Q11","Tâche 11 : Voisins !");
define("Q11_DESC","Autour de vous, il y a beaucoup de villages différents. L'un d'entre eux s'appelle. ");
define("Q11_DESC1"," Cliquez sur 'carte' dans le menu d'en-tête et recherchez ce village. Le nom des villages de vos voisins s'affiche lorsque vous passez votre souris sur l'un d'entre eux.");
define("Q11_ORDER","Mission :</p>Cherchez les coordonnées de ");
define("Q11_ORDER1","et entrez-les ici.");
define("Q11_RESP","Exactement, il y a le village de ");
define("Q11_RESP1"," Autant de ressources que vous atteignez ce village. Enfin, presque autant...");
define("Q11_BUTN","tâche complète");

define("Q12","Tâche 12: Abri");
define("Q12_DESC","Il est temps d'ériger un abri. Le monde de <?php echo SERVER_NAME; ?> est dangereux.<br \/><br \/>De nombreux joueurs vivent en volant les ressources des autres joueurs. Construisez un abri pour cacher certaines de vos ressources aux ennemis.");
define("Q12_ORDER","Mission :<\/p>Construisez un abri.");
define("Q12_RESP","Bravo, maintenant il est beaucoup plus difficile pour vos méchants compagnons de piller votre village.<br \/><br \/>En cas d'attaque, vos villageois cacheront d'eux-mêmes les ressources à l'abri.");

define("Q13","Tâche 13 : À deux.");
define("Q13_DESC","Sur <?php echo SERVER_NAME; ?> il y a toujours quelque chose à faire ! Faites passer un bûcheron, un puits d'argile, une mine de fer et un champ de céréales au niveau 2 chacun.");
define("Q13_ORDER","Mission :<\/p>Étendez une tuile de chaque ressource au niveau 2.");
define("Q13_RESP","Très bien, votre village grandit et prospère !");

define("Q14","Tâche 14 : Instructions");
define("Q14_DESC","Dans les instructions du jeu, vous trouverez de courts textes d'information sur les différents bâtiments et types d'unités.<br \/><br \/>Cliquez sur 'instructions' à gauche pour savoir combien de bois est nécessaire pour la caserne.");
define("Q14_ORDER","Mission :<\/p>Entrez le coût en bois d'une caserne");
define("Q14_BUTN","valider la tâche");
define("Q14_RESP","Exactement ! Les casernes coûtent 210 bois.");

define("Q15","Tâche 15 : Bâtiment principal");
define("Q15_DESC","Vos maîtres bâtisseurs ont besoin d'un bâtiment principal de niveau 3 pour ériger des bâtiments importants tels que la place du marché ou la caserne.");
define("Q15_ORDER","Mission :<\/p>Améliorez votre bâtiment principal au niveau 3.");
define("Q15_RESP","Bravo ! Le niveau 3 du bâtiment principal est terminé.<br><br>Avec cette mise à niveau, vos maîtres constructeurs peuvent non seulement construire plus de types de bâtiments, mais aussi le faire plus rapidement.");

define("Q16","Tâche 16 : Avancé !");
define("Q16_DESC","Consultez à nouveau votre rang dans les statistiques des joueurs et appréciez vos progrès.");
define("Q16_ORDER","Mission :<\/p>Cherchez votre rang dans les statistiques et saisissez-le ici.");
define("Q16_RESP","Bien joué ! C'est votre rang actuel.");

define("Q17","Tâche 17 : Armes ou pognon");
define("Q17_DESC","Maintenant, vous devez prendre une décision : soit faire du commerce pacifiquement, soit devenir un guerrier redouté.<br \/><br \/>Pour le marché, vous avez besoin d'un grenier, pour la caserne, vous avez besoin d'un point de ralliement.");
define("Q17_BUTN","Commerce");
define("Q17_BUTN1","Militaire");

define("Q18","Tâche 18 : Militaire");
define("Q18_DESC","Une décision courageuse. Pour pouvoir envoyer des troupes, vous avez besoin d'un point de ralliement.<br \/><br \/>Le point de ralliement doit être construit sur un site de construction spécifique. Le");
define("Q18_DESC1"," chantier.");
define("Q18_DESC2"," est situé sur le côté droit du bâtiment principal, légèrement en dessous de celui-ci. Le chantier lui-même est courbe.");
define("Q18_ORDER","Mission :<\/p>Construisez un point de ralliement.");
define("Q18_RESP","Votre point de ralliement est érigé ! Un bon pas vers la domination mondiale !");

define("Q19","Tâche 19 : Caserne");
define("Q19_DESC","Vous avez maintenant un bâtiment principal de niveau 3 et un point de ralliement. Cela signifie que toutes les conditions préalables à la construction de casernes ont été remplies.<br><br>Vous pouvez utiliser la caserne pour entraîner des troupes au combat.");
define("Q19_ORDER","Mission :<\/p>Construire une caserne.");
define("Q19_RESP","Bravo... Les meilleurs instructeurs de tout le pays se sont réunis pour entraîner vos hommes au combat au meilleur de leur forme.");

define("Q20","Tâche 20 : Former.");
define("Q20_DESC","Maintenant que vous avez une caserne, vous pouvez commencer à entraîner des troupes. Formez deux");
define("Q20_ORDER","Merci d'entraîner 2 ");
define("Q20_RESP","Les fondations de votre glorieuse armée ont été posées.<br \/><br \/>Avant d'envoyer votre armée au pillage, vous devriez vérifier auprès du.");
define("Q20_RESP1","Simulateur de combat");
define("Q20_RESP2","pour voir combien de troupes vous avez besoin pour combattre avec succès un rat sans pertes.");

define("Q21","Tâche 18 : Économie");
define("Q21_DESC","Le commerce et l'économie était votre choix. Des heures dorées vous attendent à coup sûr !");
define("Q21_ORDER","Mission :<\/p>Construisez un grenier.");
define("Q21_RESP","Bien joué ! Avec le grenier, vous pouvez stocker plus de blé.");

define("Q22","Tâche 19 : Entrepôt");
define("Q22_DESC","Il n'y a pas que la culture qui doit être économisée. D'autres ressources peuvent également être gaspillées si elles ne sont pas stockées correctement. Construisez un entrepôt !");
define("Q22_ORDER","Mission :<\/p>Construisez un entrepôt.");
define("Q22_RESP",";Bravo, votre Entrepôt est complet...&rdquo;<\i><br \/>Vous avez maintenant rempli toutes les conditions préalables requises pour construire un Entrepôt.");

define("Q23","Tâche 20 : Marché.");
define("Q23_DESC",";Construisez un marché pour pouvoir commercer avec les autres joueurs.");
define("Q23_ORDER","Mission :<\/p>Veuillez construire une Place du Marché.");
define("Q23_RESP",";La place de marché a été complétée. Vous pouvez maintenant faire vos propres offres et accepter les offres étrangères ! Lorsque vous créez vos propres offres, vous devez penser à offrir ce dont les autres joueurs ont le plus besoin pour obtenir plus de profit.");

define("Q24","Task 21: Everything to 2.");
define("Q24_DESC","Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.");
define("Q24_ORDER","Order:<\/p>Extend all resource tiles to level 2.");
define("Q24_RESP","Congratulations! Your village grows and thrives...");

define("Q28","Tâche 22: Alliance.");
define("Q28_DESC","Le travail d'équipe est important dans Travian. Les joueurs qui travaillent ensemble s'organisent en alliances. Obtenez une invitation d'une alliance dans votre région et rejoignez cette alliance. Vous pouvez également fonder votre propre alliance. Pour ce faire, vous avez besoin d'une ambassade de niveau 3.");
define("Q28_ORDER","Mission :<\/p>Rejoignez une alliance ou fondez-en une par vous-même.");
define("Q28_RESP","C'est bien ! Maintenant, vous êtes dans une alliance appelée");
define("Q28_RESP1",", et plus longtemps vous êtes membre de leur alliance, plus vite vous progresserez...");

define("Q29","Tâche 23 : Bâtiment principal au niveau 5");
define("Q29_DESC","Pour pouvoir construire un palais ou une résidence, il vous faudra un bâtiment principal au niveau 5.");
define("Q29_ORDER","Mission :<\/p>Améliorez votre bâtiment principal au niveau 5.");
define("Q29_RESP","Le bâtiment principal est maintenant au niveau 5 et vous pouvez construire un palais ou une résidence...");

define("Q30","Tâche 24 : Grenier au niveau 3.");
define("Q30_DESC","Pour ne pas perdre de récolte, vous devez améliorer votre grenier.");
define("Q30_ORDER","Mission :<\/p>Améliorez votre grenier au niveau 3.");
define("Q30_RESP","Grenier désormais au niveau 3...");

define("Q31","Tâche 25 : Entrepôt au niveau 7");
define("Q31_DESC"," Pour vous assurer que vos ressources ne déborderont pas, vous devez mettre à niveau votre entrepôt.");
define("Q31_ORDER","Mission :<\/p>Améliorez votre entrepôt au niveau 7.");
define("Q31_RESP","L'entrepôt est passé au niveau 7...");

define("Q32","Task 26: All to five!");
define("Q32_DESC","You will always need more resources. Resource tiles are quite expensive but will always pay out in the long term.");
define("Q32_ORDER","Order:<\/p>Upgrade all resources tiles to level 5.");
define("Q32_RESP","All resources are at level 5, very good, your village grows and thrives!");

define("Q33","Task 27: Palace or Residence?");
define("Q33_DESC","To found a new village, you will need settlers. Those you can train in either a palace or a residence.");
define("Q33_ORDER","Order:<\/p>Build a palace or residence to level 10.");
define("Q33_RESP","had reached to level 10, you can now train settlers and found your second village. Notice the cultural points...");

define("Q34","Task 28: 3 settlers.");
define("Q34_DESC","To found a new village, you will need settlers. They can be trained  in either a palace or a residence.");
define("Q34_ORDER","Order:<\/p>Train 3 settlers.");
define("Q34_RESP","3 settlers were trained. To found new village you need at least");
define("Q34_RESP1","culture points...");

define("Q35","Task 29: New Village.");
define("Q35_DESC","There are a lot of empty tiles on the map. Find one that suits you and found a new village");
define("Q35_ORDER","Order:<\/p>Found a new village.");
define("Q35_RESP","I am proud of you! Now you have two villages and have all the possibilities to build a mighty empire. I wish you luck with this.");

define("Q36"," Task 30: Build a ");
define("Q36_DESC","Now that you have trained some soldiers, you should build a ");
define("Q36_DESC1"," too. It increases the base defence and your soldiers will receive a defensive bonus.");
define("Q36_ORDER","Order:<\/p>Build a ");
define("Q36_RESP","That's what I'm talking about. A ");
define("Q36_RESP1"," Very useful. It increases the defence of the troops in the village.");

define("Q37","Tasks");
define("Q37_DESC","All tasks achieved!");

define("OPT3","Resource overview");
define("T","Your resource deliveries");
define("T1","Delivery");
define("T2","Delivery time");
define("T3","Status");
define("T4","fetch");
define("T5","fetched");
define("T6","on hold");
define("T7","1 day Travian ");
define("T8","2 days Travian ");

//Quest 25
define("Q25_7","Tâche 11 : Voisins !");
define("Q25_7_DESC","Autour de vous, il y a beaucoup de villages différents. L'un d'entre eux s'appelle. ");
define("Q25_7_DESC1","Cliquez sur 'carte' dans le menu d'en-tête et recherchez ce village. Le nom des villages de vos voisins s'affiche lorsque vous passez votre souris sur l'un d'entre eux.");
define("Q25_7_ORDER","<\/p><b>Mission :</p>Cherchez les coordonnées de ");
define("Q25_7_ORDER1","et entrez-les ici.");
define("Q25_7_RESP","Exactement. Il y a le village de ");
define("Q25_7_RESP1"," Autant de ressources que vous atteignez ce village. Enfin, presque autant...");

define("Q25_8","Tâche 8 : Une énorme armée !");
define("Q25_8_DESC","Maintenant, j'ai une quête très spéciale pour vous. J'ai faim. Donnez-moi 200 unités de céréales !<br \/><br \/>En retour, j'essaierai d'organiser une énorme armée pour protéger votre village.");
define("Q25_8_ORDER","Mission :<\/p>Envoyer 200 unités de céréales au Maître des Tâches");
define("Q25_8_BUTN","Envoyer les céréales");
define("Q25_8_NOCROP","Pas assez de céréales !");

define("Q25_9","Tâche 7 : Un chacun !");
define("Q25_9_DESC","Maintenant, nous devrions augmenter un peu votre production de ressources. Construisez un bûcheron supplémentaire, une carrière d'argile, une mine de fer et un champ de céréales au niveau 1.");
define("Q25_9_ORDER","Mission :<\/p>Étendre une tuile supplémentaire de chaque ressource au niveau 1.");
define("Q25_9_RESP","Très bien, bon développement de la production de ressources.");

define("Q25_10","Tâche 10 : bientôt disponible !");
define("Q25_10_DESC","Maintenant, il y a le temps pour une petite pause jusqu'à ce que la gigantesque armée que je vous ai envoyée arrive.<br \/><br \/>En attendant, vous pouvez explorer la carte ou étendre quelques tuiles de ressources.");
define("Q25_10_ORDER","Mission :<\/p>Attendez l'arrivée de l'armée du maître des tâches.");
define("Q25_10_RESP","Maintenant, une énorme armée de maître des tâches est arrivée pour protéger votre village.");
define("Q25_10_REWARD","Votre récompense :<\/p>2 jours de plus de Travian");

define("Q25_11","Task 11: Reports");
define("Q25_11_DESC","Every time something important happens to your account you will receive a report.<br \/><br \/>You can see these by clicking on the left half of the 5th button (from left to right). Read the report and come back here.");
define("Q25_11_ORDER","Order:<\/p>Read your latest report.");
define("Q25_11_RESP","You received it? Very good. Here is your reward.");

define("Q25_12","Task 12: Everything to 1.");
define("Q25_12_DESC","Now we should increase your resource production a bit.");
define("Q25_12_ORDER","Order:<\/p>Extend all resource tiles to level 1.");
define("Q25_12_RESP","Very good, your resource production just thrives.<br \/><br \/>Soon we can start with constructing buildings in the village.");

define("Q25_13","Task 13: Dove of Peace");
define("Q25_13_DESC","The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]<\/b> to your profile.");
define("Q25_13_ORDER","Order:<\/p>Write the code <b>[#0]<\/b> into your profile by adding it to one of the two description fields.");
define("Q25_13_RESP","Well done! Now everyone can see what a great warrior the world is approached by.");

define("Q25_14","Task 14: Cranny");
define("Q25_14_DESC","It's getting time to erect a cranny. The world of <b>" . SERVER_NAME. "</b> is dangerous.<br \/><br \/>Many players live by stealing other players' resources. Build a cranny to hide some of your resources from enemies.");
define("Q25_14_ORDER","Order:<\/p>Construct a Cranny.");
define("Q25_14_RESP","Well done, now it's way harder for your mean fellow players to plunder your village.<br \/><br \/>If under attack, your villagers will hide the resources in the Cranny all on their own.");

define("Q25_15","Task 15: To Two.");
define("Q25_15_DESC","In <b>" . SERVER_NAME. "</b> there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.");
define("Q25_15_ORDER","Order:<\/p>Extend one of each resource tile to level 2.");
define("Q25_15_RESP","Very good, your village grows and thrives!");

define("Q25_16","Task 16: Instructions");
define("Q25_16_DESC","In the ingame instructions you can find short information texts about different buildings and types of units.<br \/><br \/>Click on 'instructions' at the left to find out how much lumber is required for the barracks.");
define("Q25_16_ORDER","Order:<\/p>Enter how much lumber barracks cost");
define("Q25_16_BUTN","complete task");
define("Q25_16_RESP","Exactly! Barracks cost 210 lumber.");

define("Q25_17","Task 17: Main Building");
define("Q25_17_DESC","Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.");
define("Q25_17_ORDER","Order:<\/p>Extend your main building to level 3.");
define("Q25_17_RESP","Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders can construct more types of buildings and also do so faster.");

define("Q25_18","Task 18: Advanced!");
define("Q25_18_DESC","Look up your rank in the player statistics again and enjoy your progress.");
define("Q25_18_ORDER","Order:<\/p>Look for your rank in the statistics and enter it here.");
define("Q25_18_RESP","Well done! That's your current rank.");

define("Q25_19","Task 19: Weapons or Dough");
define("Q25_19_DESC","Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br \/><br \/>For the marketplace you need a granary, for the barracks you need a rally point.");
define("Q25_19_BUTN","Economy");
define("Q25_19_BUTN1","Military");

define("Q25_20","Task 19: Economy");
define("Q25_20_DESC","Trade & Economy was your choice. Golden times await you for sure!");
define("Q25_20_ORDER","Order:<\/p>Construct a Granary.");
define("Q25_20_RESP","Well done! With the Granary you can store more wheat.");

define("Q25_21","Task 20: Warehouse");
define("Q25_21_DESC","Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!");
define("Q25_21_ORDER","Order:<\/p>Construct Warehouse.");
define("Q25_21_RESP",";Well done, your Warehouse is complete...&rdquo;<\/i><br \/>Now you have fulfilled all prerequisites required to construct a Marketplace.");

define("Q25_22","Task 21: Marketplace.");
define("Q25_22_DESC",";Construct a Marketplace so you can trade with your fellow players.");
define("Q25_22_ORDER","Order:<\/p>Please build a Marketplace.");
define("Q25_22_RESP","The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.");

define("Q25_23","Task 19: Military");
define("Q25_23_DESC","A brave decision. To be able to send troops you need a rally point.<br \/><br \/>The rally point must be built on a specific building site. The ");
define("Q25_23_DESC1"," building site.");
define("Q25_23_DESC2"," is located on the right side of the main building, slightly below it. The building site itself is curved.");
define("Q25_23_ORDER","Order:<\/p>Construct a rally point.");
define("Q25_23_RESP","Your rally point has been erected! A good move towards world domination!");

define("Q25_24","Task 20: Barracks");
define("Q25_24_DESC","Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.");
define("Q25_24_ORDER","Order:<\/p>Construct barracks.");
define("Q25_24_RESP","Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.");

define("Q25_25","Task 21: Train.");
define("Q25_25_DESC","Now that you have barracks you can start training troops. Train two ");
define("Q25_25_ORDER","Please train 2 ");
define("Q25_25_RESP","The foundation for your glorious army has been laid.<br \/><br \/>Before sending your army off to plunder you should check with the");
define("Q25_25_RESP1","Combat Simulator");
define("Q25_25_RESP2","to see how many troops you need to successfully fight one rat without losses.");

define("Q25_26","Task 22: Everything to 2.");
define("Q25_26_DESC","Now it's time again to extend the cornerstones of might and wealth! This time level 1 is not enough... it will take a while but in the end it will be worth it. Extend all your resource tiles to level 2!");
define("Q25_26_ORDER","Order:<\/p>Extend all resource tiles to level 2.");
define("Q25_26_RESP","Congratulations! Your village grows and thrives...");

define("Q25_27","Task 23: Friends.");
define("Q25_27_DESC","As single player it is hard to compete with attackers. It is to your advantage if your neighbours like you.<br \/><br \/>It is even better if you play together with friends. Did you know that you can earn <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> by inviting friends?");
define("Q25_27_ORDER","Order:<\/p>How much <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> do you earn for inviting a friend?");
define("Q25_27_RESP","Correct! You get 50 <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> if your invited friend have 2 village.");

define("Q25_28","Task 24: Construct Embassy.");
define("Q25_28_DESC","The world of Travian is dangerous. You already built a cranny to protect you against attackers.<br \/><br \/>A good alliance will give you even better protection.");
define("Q25_28_ORDER","Order:<\/p>To accept invitations from alliances, build an embassy.");
define("Q25_28_RESP","Yes! You can wait invitation from an alliance or create you own if embassy has level 3");

define("Q25_29","Task 25: Alliance.");
define("Q25_29_DESC","Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.");
define("Q25_29_ORDER","Order:<\/p>Join an alliance or found your own alliance.");
define("Q25_29_RESP","Well done! Now you're in a union called");
define("Q25_29_RESP1",", and you're a member of their alliance.<br>Working together you will all progress faster...");

define("Q25_30","Tasks");
define("Q25_30_DESC","All tasks achieved!");


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define("U0","Hero");

//ROMAN UNITS
define("U1","Legionnaire");
define("U2","Praetorian");
define("U3","Imperian");
define("U4","Equites Legati");
define("U5","Equites Imperatoris");
define("U6","Equites Caesaris");
define("U7","Battering Ram");
define("U8","Fire Catapult");
define("U9","Senator");
define("U10","Settler");

//TEUTON UNITS
define("U11","Échangiste(s)");
define("U12","Lancier(s)");
define("U13","Homme(s) à la hache");
define("U14","Scout(s)");
define("U15","Paladin(s)");
define("U16","Chevalier(s) Teutonique(s)");
define("U17","Bélier(s)");
define("U18","Catapulte(s)");
define("U19","Chef(s)");
define("U20","Colon(s)");

//GAUL UNITS
define("U21","Phalange(s)");
define("U22","Épéiste(s)");
define("U23","Éclaireur(s)");
define("U24","Tonnerre(s) de Theutate");
define("U25","Druidrider(s)");
define("U26","Haeduan(s)");
define("U27","Bélier(s)");
define("U28","Trébuchet(s)");
define("U29","Chef(s) de clan");
define("U30","Colon(s)");
define("U99","Piège(s)");

//NATURE UNITS
define("U31","Rat");
define("U32","Spider");
define("U33","Snake");
define("U34","Bat");
define("U35","Wild Boar");
define("U36","Wolf");
define("U37","Bear");
define("U38","Crocodile");
define("U39","Tiger");
define("U40","Elephant");

//NATARS UNITS
define("U41","Pikeman");
define("U42","Thorned Warrior");
define("U43","Guardsman");
define("U44","Birds Of Prey");
define("U45","Axerider");
define("U46","Natarian Knight");
define("U47","War Elephant");
define("U48","Ballista");
define("U49","Natarian Emperor");
define("U50","Natarian Settler");

//MONSTER UNITS
define("U51","Monster Peon");
define("U52","Monster Hunter");
define("U53","Monster Warrior");
define("U54","Ghost");
define("U55","Monster Steed");
define("U56","Monster War Steed");
define("U57","Monster Ram");
define("U58","Monster Catapult");
define("U59","Monster Chief");
define("U60","Monster Settler");

// RESOURCES
define("R1","Lumber");
define("R2","Clay");
define("R3","Iron");
define("R4","Crop");

//INDEX.php
define("LOGIN","Connexion");
define("PLAYERS","Joueurs");
define("MODERATOR","Modérateur");
define("ACTIVE","Actifs");
define("ONLINE","En ligne");
define("TUTORIAL","Tutoriel");
define("PLAYER_STATISTICS","Statistiques du joueur");
define("TOTAL_PLAYERS","".PLAYERS." au total");
define("ACTIVE_PLAYERS","Joueurs actifs");
define("ONLINE_PLAYERS","".PLAYERS." en ligne");
define("MP_STRATEGY_GAME","".SERVER_NAME." - the multiplayer strategy game");
define("WHAT_IS","".SERVER_NAME." is one of the most popular browser games in the world. As a player in ".SERVER_NAME.", you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.");
define("REGISTER_FOR_FREE","Register here for free!");
define("LATEST_GAME_WORLD","Latest game world");
define("LATEST_GAME_WORLD2","Register on the latest<br/>game world and enjoy<br/>the advantages of<br/>being one of the<br/>first players.");
define("PLAY_NOW","Rejoindre ".SERVER_NAME." maintenant");
define("LEARN_MORE","Learn more <br/>about ".SERVER_NAME."!");
define("LEARN_MORE2","Now with a revolutionised<br>server system, completely new<br>graphics <br>This clone is The Shiz!");
define("COMUNITY","Community");
define("BECOME_COMUNITY","Become part of our community now!");
define("BECOME_COMUNITY2","Become a part of one of<br>the biggest gaming<br>communities in the<br>world.");
define("NEWS","News");
define("SCREENSHOTS","Captures d'écran");
define("FAQ","FAQ");
define("SPIELREGELN","Règles");
define("AGB","Terms and Conditions");
define("LEARN1","Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.");
define("LEARN2","Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.");
define("LEARN3","View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.");
define("LEARN4","Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.");
define("LEARN5","Receive detailed reports about your adventures, trades and battles. Don't forget to check the brand new reports about the happenings taking place in your surroundings.");
define("LEARN6","Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.");
define("LOGIN_TO","Se connecter à ". SERVER_NAME);
define("REGIN_TO","Inscription sur ". SERVER_NAME);
define("P_ONLINE","Joueurs en ligne : ");
define("P_TOTAL","Joueurs en tout : ");
define("CHOOSE","Veuillez choisir un serveur.");
define("STARTED"," Le serveur a redémarré il y a ". round((time()-COMMENCE)/86400) ." jours.");

//ANMELDEN.php
define("NICKNAME","Nom d'utilisateur");
define("EMAIL","Email");
define("PASSWORD","Mot de passe");
define("ROMANS","Romains");
define("TEUTONS","Teutons");
define("GAULS","Gaulois");
define("NW","Nord Ouest");
define("NE","Nord Est");
define("SW","Sud Ouest");
define("SE","Sud Est");
define("RANDOM","aléatoire");
define("ACCEPT_RULES"," J'accepte les règles du jeu et les conditions générales.");
define("ONE_PER_SERVER","Chaque joueur ne peut posséder qu'UN seul compte par serveur.");
define("BEFORE_REGISTER","Before you register an account you should read the <a href='../anleitung.php' target='_blank'>instructions</a> of Travian ro1 to see the specific advantages and disadvantages of the three tribes.");
define("BUILDING_UPGRADING","Construction(s) en cours :");
define("HOURS","heures");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","Mouvements de troupes :");
define("ARRIVING_REINF_TROOPS","Arrivée des troupes de renfort");
define("ARRIVING_ATTACKING_TROOPS","Arrivée des troupes d'attaque");
define("ARRIVING_REINF_TROOPS_SHORT","Renforc.");
define("OWN_ATTACKING_TROOPS","Own attacking troops");
define("ATTACK","Attaque");
define("OWN_REINFORCING_TROOPS","Own reinforcing troops");
define("TROOPS_DORF","Troupes :");
define("NEWVILLAGE","New vill.");
define("FOUNDNEWVILLAGE","Création d'un nouveau village");
define("UNDERATTACK","Le village est attaqué");
define("OASISATTACK","L'oasis est attaquée");
define("OASISATTACKS","Oasis Att.");
define("RETURNFROM","Return from");
define("REINFORCEMENTFOR","Reinforcement to");
define("ATTACK_ON","Attaque vers");
define("RAID_ON","Raid vers");
define("SCOUTING","Scouting");
define("PRISONERS","Prisonniers");
define("PRISONERSIN","Prisonniers à");
define("PRISONERSFROM","Prisonniers de");
define("TROOPS","Troupes");
define("TROOPSFROM","Troupes");
define("BOUNTY","Prime");
define("ARRIVAL","Arrivée");
define("CATAPULT_TARGET","Cible(s) de catapulte");
define("INCOMING_TROOPS","Troupes entrantes");
define("TROOPS_ON_THEIR_WAY","Troupes en route");
define("OWN_TROOPS","Troupes possédées");
define("ON","on");
define("AT","à");
define("UPKEEP","Upkeep");
define("SEND_BACK","Send back");
define("TROOPS_IN_THE_VILLAGE","Troupes dans le village");
define("TROOPS_IN_OTHER_VILLAGE","Troops in other village");
define("TROOPS_IN_OASIS","Troops in oasis");
define("KILL","Kill");
define("FROM","From");
define("SEND_TROOPS","Send troops");
define("TASKMASTER","Taskmaster");
define("VILLAGE_OF_THE_ELDERS_TROOPS","village of the elders troops");

//SEND TROOP
define("REINFORCE","Renforcement");
define("NORMALATTACK","Attaque normale");
define("RAID","Raid");
define("OR","ou");
define("SENDTROOP","Envoyer des troupes");
define("TROOP","Troupes");
define("NOTROOP","Pas de troupes");

//map
define("DETAIL","Détails");
define("ABANDVALLEY","Vallée abandonnée");
define("OCCUPIED","Occupé");
define("UNOCCUPIED","Inoccupé");
define("UNOCCUOASIS","Oasis inoccupée");
define("OCCUOASIS","Oasis occupée");
define("THERENOINFO","Aucune information n'est<br>disponible.");
define("LANDDIST","Land distribution");
define("TRIBE","Tribu");
define("ALLIANCE","Alliance");
define("POP","Population");
define("REPORT","Rapport");
define("OPTION","Options");
define("CENTREMAP","Centrer sur la vue Carte");
define("FNEWVILLAGE","Découverte d'un nouveau village");
define("CULTUREPOINT","points culturels");
define("BUILDRALLY","créer un point de ralliement");
define("SETTLERSAVAIL","colons disponibles");
define("BEGINPRO","protection débutant");
define("SENDMERC","Envoyer des marchandises");
define("BAN","Le joueur est banni");
define("BUILDMARKET","Construire une place du marché");
define("PERHOUR","par heure");
define("BONUS","Bonus");
define("MAP","Carte");
define("CROPFINDER","Recherche champs de céréales");
define("NORTH","Nord");
define("EAST","Est");
define("SOUTH","Sud");
define("WEST","Ouest");

//other
define("VILLAGE","Village");
define("OASIS","Oasis");
define("NO_OASIS", "Vous ne possédez pas d'oasis.");
define("NO_VILLAGES", "Il n'y a pas de village.");
define("PLAYER","Joueur");

//LOGIN.php
define("COOKIES","Les cookies doivent être activés pour que vous puissiez vous connecter. Si vous partagez cet ordinateur avec d'autres personnes, vous devez vous déconnecter après chaque session pour votre propre sécurité.");
define("NAME","Nom d'utilisateur");
define("PW_FORGOTTEN","Password forgotten?");
define("PW_REQUEST","Then you can request a new one which will be sent to your email address.");
define("PW_GENERATE","Generate new password.");
define("EMAIL_NOT_VERIFIED","Email not verified!");
define("EMAIL_FOLLOW","Follow this link to activate your account.");
define("VERIFY_EMAIL","Verify Email.");
define("SERVER_STARTS_IN","Server will start in: ");
define("START_NOW","START NOW");


//404.php
define("NOTHING_HERE","Nothing here!");
define("WE_LOOKED","We looked 404 times already but can't find anything");

//TIME RELATED
define("CALCULATED","Calculaté en");
define("SERVER_TIME","Heure du serveur :");

//MASSMESSAGE.php
define("MASS","Message Content");
define("MASS_SUBJECT","Subject:");
define("MASS_COLOR","Message color:");
define("MASS_REQUIRED","All fields required");
define("MASS_UNITS","Images (units):");
define("MASS_SHOWHIDE","Show/Hide");
define("MASS_READ","Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","Confirmation");
define("MASS_REALLY","Do you really want to send MassIGM?");
define("MASS_ABORT","Aborting right now");
define("MASS_SENT","Mass IGM was sent");

//BUILDINGS
define("WOODCUTTER","Bûcheron");
define("CLAYPIT","Puits d'argile");
define("IRONMINE","Mine de fer");
define("CROPLAND","Champs de céréales");

define("SAWMILL","Scierie");
define("SAWMILL_DESC","C'est ici que le bois livré par vos bûcherons est transformé. En fonction de son niveau, votre scierie peut augmenter votre production de bois jusqu'à 25 %.");
define("CURRENT_WOOD_BONUS","Prime au bois actuelle :");
define("WOOD_BONUS_LEVEL","Bonus de bois au niveau");
define("MAX_LEVEL","Bâtiment déjà au niveau maximum");
define("PERCENT","%");

define("BRICKYARD","Briqueterie");
define("CURRENT_CLAY_BONUS","Prime d'argile actuelle :");
define("CLAY_BONUS_LEVEL","Bonus d'argile au niveau");
define("BRICKYARD_DESC","L'argile y est transformée en briques. En fonction de son niveau, votre briqueterie peut augmenter votre production d'argile jusqu'à 25 %.");

define("IRONFOUNDRY","Fonderie de fer");
define("CURRENT_IRON_BONUS","Prime de fer actuelle :");
define("IRON_BONUS_LEVEL","Bonus de fer au niveau");
define("IRONFOUNDRY_DESC","Le fer est fondu ici. En fonction de son niveau, votre fonderie de fer peut augmenter votre production de fer jusqu'à 25 %.");

define("GRAINMILL","Moulin à grains");
define("CURRENT_CROP_BONUS","Prime à la culture actuelle :");
define("CROP_BONUS_LEVEL","Bonus de récolte au niveau");
define("GRAINMILL_DESC","Ici, vos céréales sont moulues afin de produire de la farine. En fonction de son niveau, votre moulin à grains peut augmenter votre production jusqu'à 25 %.");

define("BAKERY","Boulangerie");
define("BAKERY_DESC","Ici, la farine produite dans votre moulin est utilisée pour faire du pain. En outre, avec le moulin à grains, l'augmentation de la production agricole peut aller jusqu'à 50 %.");

define("WAREHOUSE","Entrepôt");
define("CURRENT_CAPACITY","Capacité actuelle :");
define("CAPACITY_LEVEL","Capacité au niveau");
define("RESOURCE_UNITS","Unités de ressources");
define("WAREHOUSE_DESC","Les ressources bois, argile et fer sont stockées dans votre entrepôt. En augmentant son niveau, vous augmentez la capacité de votre entrepôt.");

define("GRANARY","Grenier");
define("CROP_UNITS","Unités de culture");
define("GRANARY_DESC","Les récoltes produites par vos fermes sont stockées dans le Grenier. En augmentant son niveau, vous augmentez la capacité du grenier.");

define("BLACKSMITH","Forge");
define("ACTION","Action");
define("UPGRADE","Mise à niveau");
define("UPGRADE_IN_PROGRESS","Mise à niveau<br>en cours");
define("UPGRADE_BLACKSMITH","Mettre à niveau<br>Forge");
define("UPGRADES_COMMENCE_BLACKSMITH","Les mises à niveau peuvent commencer lorsque la forge est terminée.");
define("MAXIMUM_LEVEL","Niveau<br>maximum");
define("EXPAND_WAREHOUSE","Améliorez<br>l'entrepôt");
define("EXPAND_GRANARY","Améliorez<br>le grenier");
define("ENOUGH_RESOURCES","Ressources suffisantes");
define("CROP_NEGATIVE ","La production agricole est négative, vous n'atteindrez jamais les ressources nécessaires.");
define("TOO_FEW_RESOURCES","Trop peu<br>de ressources");
define("UPGRADING","Mise à niveau");
define("DURATION","Durée");
define("COMPLETE","Terminé");
define("BLACKSMITH_DESC","Dans les fours de fusion du forgeron, les armes de vos guerriers sont améliorées. En augmentant son niveau, vous pouvez rendre la fabrication d'armes encore meilleure.");

define("ARMOURY","Armurerie");
define("UPGRADE_ARMOURY","Mettre à niveau<br>Armurerie");
define("UPGRADES_COMMENCE_ARMOURY","Les mises à niveau peuvent commencer lorsque l'armurerie est terminée.");
define("ARMOURY_DESC","Dans les fours de fusion de l'armurerie, l'armure de vos guerriers est améliorée. En augmentant son niveau, vous pouvez rendre la fabrication d'une armure encore meilleure.");

define("TOURNAMENTSQUARE","Place du tournoi");
define("CURRENT_SPEED","Bonus de vitesse actuel :");
define("SPEED_LEVEL","Bonus de vitesse au niveau");
define("TOURNAMENTSQUARE_DESC","Sur la Place du Tournoi, vos troupes peuvent entraîner leur endurance. Plus le bâtiment est amélioré, plus vos troupes sont rapides au-delà d'une distance minimale de ".TS_THRESHOLD." cases.");

define("MAINBUILDING","Bâtiment principal");
define("CURRENT_CONSTRUCTION_TIME","Temps de construction actuel :");
define("CONSTRUCTION_TIME_LEVEL","Temps de construction au niveau");
define("DEMOLITION_BUILDING","Demolition of the building:</h2><p>If you no longer need a building, you can order the demolition of the building.</p>");
define("DEMOLISH","Démolir");
define("DEMOLITION_OF","Démolition de ");
define("MAINBUILDING_DESC","In the main building the village's master builders live. The higher its level the faster your master builders complete the construction of new buildings.");

define("RALLYPOINT","Point de ralliement");
define("RALLYPOINT_COMMENCE","Le mouvement des troupes sera affiché lorsque le ".RALLYPOINT." sera complété");
define("OVERVIEW","Vue d'ensemble");
define("REINFORCEMENT","Renforcement");
define("EVASION_SETTINGS","evasion settings");
define("SEND_TROOPS_AWAY_MAX","Send troops away a maximum of");
define("TIMES","times");
define("PER_EVASION","per evasion");
define("RALLYPOINT_DESC","Les troupes de votre village se réunissent ici. De là, vous pouvez les envoyer à la conquête, au raid ou au renforcement d'autres villages.");

define("MARKETPLACE","Place du marché");
define("MERCHANT","Marchands");
define("OR_","ou");
define("GO","go");
define("UNITS_OF_RESOURCE","unités de ressource");
define("MERCHANT_CARRY","Chaque commerçant peut transporter");
define("MERCHANT_COMING","Les marchands arrivent");
define("TRANSPORT_FROM","Transport à partir de");
define("ARRIVAL_IN","Arrivée dans");
define("NO_COORDINATES_SELECTED","Aucune coordonnée sélectionnée");
define("CANNOT_SEND_RESOURCES","Vous ne pouvez pas envoyer de ressources dans le même village");
define("BANNED_CANNOT_SEND_RESOURCES","Ce joueur est banni. Vous ne pouvez pas lui envoyer de ressources");
define("RESOURCES_NO_SELECTED","Ressources non sélectionnées");
define("ENTER_COORDINATES","Entrez les coordonnées ou le nom du village");
define("TOO_FEW_MERCHANTS","Trop peu de marchands");
define("OWN_MERCHANTS_ONWAY","Propres marchands en route");
define("MERCHANTS_RETURNING","Marchands de retour");
define("TRANSPORT_TO","Transporter vers");
define("I_AN_SEARCHING","Je cherche");
define("I_AN_OFFERING","Je propose");
define("OFFERS_MARKETPLACE","Offres sur le marché");
define("NO_AVAILABLE_OFFERS","Aucune offre sur le marché");
define("OFFERED_TO_ME","Offertes<br>à moi");
define("WANTED_TO_ME","Recherché<br>par moi");
define("NOT_ENOUGH_MERCHANTS","Pas assez de marchandise");
define("ACCEP_OFFER","Accepter la proposition");
define("NO_AVALIBLE_OFFERS","Il n'y a pas d'offres disponibles sur le marché");
define("SEARCHING","Recherche");
define("OFFERING","Propose");
define("MAX_TIME_TRANSPORT","durée maximale du transport");
define("OWN_ALLIANCE_ONLY","propre alliance uniquement");
define("INVALID_OFFER","Proposition invalide");
define("INVALID_MERCHANTS_REPETITION","Taux de répétition des marchands invalide");
define("USER_ON_VACATION","L'utilisateur est en mode vacances");
define("NOT_ENOUGH_RESOURCES","Pas assez de ressources");
define("OFFER","Proposition");
define("SEARCH","Recherche");
define("OWN_OFFERS","Offres propres");
define("ALL","Tout");
define("NPC_TRADE","Commerce de PNJ");
define("SUM","Somme");
define("REST","Reste");
define("TRADE_RESOURCES","Échanger des ressources à (étape 2 sur 2)");
define("DISTRIBUTE_RESOURCES","Distribuer les ressources à (étape 1 sur 2)");
define("OF","of");
define("NPC_COMPLETED","PNJ terminé");
define("BACK_BUILDING","Retour au bâtiment");
define("YOU_CAN_NAT_NPC_WW","Vous ne pouvez pas utiliser le commerce de PNJ dans un village WW.");
define("NPC_TRADING","Commerce de PNJ");
define("SEND_RESOURCES","Envoyer des ressources");
define("BUY","Acheter");
define("TRADE_ROUTES","Routes commerciales");
define("DESCRIPTION","Description");
define("TIME_LEFT","Temps restant");
define("START","Commencer");
define("NO_TRADE_ROUTES","Aucune route commerciale active");
define("TRADE_ROUTE_TO","Route commerciale vers");
define("CHECKED","vérifié");
define("DAYS","Jours");
define("EXTEND","Prolonger");
define("EDIT","Modifier");
define("EXTEND_TRADE_ROUTES","Prolongation de la route commercial de <b>7</b> jours pour");
define("CREATE_TRADE_ROUTES","Créer une nouvelle route commerciale");
define("DELIVERIES","Livraisons");
define("START_TIME_TRADE","Heure de début");
define("CREATE_TRADE_ROUTE","Créer une route commerciale");
define("TARGET_VILLAGE","Village cible");
define("EDIT_TRADE_ROUTES","Modifier une route commerciale");
define("TRADE_ROUTES_DESC","L'itinéraire commercial vous permet de configurer pour votre marchand des itinéraires qu'il empruntera tous les jours à une certaine heure. <br /><br /> La durée standard est de <b>7</b> jours, mais vous pouvez la prolonger de <b>7</b> jours au prix de");
define("NPC_TRADE_DESC","Avec le marchand PNJ, vous pouvez distribuer les ressources de votre entrepôt comme vous le souhaitez. <br /><br /> La première ligne montre le stock actuel. Sur la deuxième ligne, vous pouvez choisir une autre distribution. La troisième ligne montre la différence entre l'ancien et le nouveau stock.");
define("MARKETPLACE_DESC","Sur le Marché, vous pouvez échanger des ressources avec d'autres joueurs. Plus son niveau est élevé, plus il est possible de transporter de ressources en même temps.");

define("EMBASSY","Ambassade");
define("TAG","Tag");
define("TO_THE_ALLIANCE","à l'alliance");
define("JOIN_ALLIANCE","rejoindre l'alliance");
define("REFUSE","refuser");
define("ACCEPT","accepter");
define("NO_INVITATIONS","Il n'y a pas d'invitations disponibles.");
define("NO_CREATE_ALLIANCE","Un joueur banni ne peut pas créer d'alliance.");
define("FOUND_ALLIANCE","alliance trouvée");
define("EMBASSY_DESC","L'ambassade est un lieu pour les diplomates. Plus son niveau est élevé, plus le roi dispose d'options.");

define("BARRACKS","Caserne");
define("QUANTITY","Quantité");
define("MAX","Max");
define("TRAINING","Entraînement");
define("FINISHED","Terminé");
define("UNIT_FINISHED","La prochaine unité sera prête dans");
define("AVAILABLE","Disponible");
define("TRAINING_COMMENCE_BARRACKS","L'entraînement pourra commencer quand la caserne sera prête.");
define("BARRACKS_DESC","Tous les fantassins sont formés dans les casernes. Plus le niveau de la caserne est élevé, plus les troupes sont formées rapidement.");

define("STABLE","Stable");
define("AVAILABLE_ACADEMY","No units available. Research at academy");
define("TRAINING_COMMENCE_STABLE","Training can commence when stable is completed.");
define("STABLE_DESC","Cavalry can be trained in the stable. The higher its level the faster the troops are trained.");

define("WORKSHOP","Workshop");
define("TRAINING_COMMENCE_WORKSHOP","Training can commence when workshop is completed.");
define("WORKSHOP_DESC","Siege engines like catapults and rams can be built in the workshop. The higher its level the faster the units are produced.");

define("ACADEMY","Academy");
define("RESEARCH_AVAILABLE","There are no researches available");
define("RESEARCH_COMMENCE_ACADEMY","Research can commence when academy is completed.");
define("RESEARCH","Research");
define("EXPAND_WAREHOUSE1","Expand warehouse");
define("EXPAND_GRANARY1","Expand granary");
define("RESEARCH_IN_PROGRESS","Research in<br>progress");
define("RESEARCHING","Researching");
define("PREREQUISITES","Prerequisites");
define("SHOW_MORE","show more");
define("HIDE_MORE","hide more");
define("ACADEMY_DESC","In the academy new unit types can be researched. By increasing its level you can order the research of better units.");

define("CRANNY","Cranny");
define("CURRENT_HIDDEN_UNITS","Currently hidden units per resource:");
define("HIDDEN_UNITS_LEVEL","Hidden units per resource at level");
define("UNITS","units");
define("CRANNY_DESC","The cranny is used to hide some of your resources when the village is attacked. These resources cannot be stolen.");

define("TOWNHALL","Town Hall");
define("CELEBRATIONS_COMMENCE_TOWNHALL","Celebrations can commence when the town hall is completed.");
define("GREAT_CELEBRATIONS","Great celebration");
define("CULTURE_POINTS","Culture points");
define("HOLD","hold");
define("CELEBRATIONS_IN_PROGRESS","Celebration<br />in progress");
define("CELEBRATIONS","Celebrations");
define("TOWNHALL_DESC","You can hold pompous celebrations in the Town Hall. Such a celebration increases your culture points. Building up your Town Hall to a higher level will decrease the length of the celebration.");

define("RESIDENCE","Residence");
define("CAPITAL","Voici votre capitale");
define("RESIDENCE_TRAIN_DESC","In order to found a new village you need a level 10 or 20 residence and 3 settlers. In order to conquer a new village you need a level 10 or 20 residence and a senator, chief or chieftain.");
define("PRODUCTION_POINTS","Production of this village:");
define("PRODUCTION_ALL_POINTS","Production of all villages:");
define("POINTS_DAY","Culture points per day");
define("VILLAGES_PRODUCED","Your villages have produced");
define("POINTS_NEED","points in total. To found or conquer a new village you need");
define("POINTS","points");
define("INHABITANTS","Inhabitants");
define("COORDINATES","Coordinates");
define("EXPANSION","Expansion");
define("TRAIN","Train");
define("DATE","Date");
define("CONQUERED_BY_VILLAGE","Villages founded or conquered by this village");
define("NONE_CONQUERED_BY_VILLAGE","No other village has been founded or conquered by this village yet.");
define("RESIDENCE_CULTURE_DESC","In order to extend your empire you need culture points. These culture points increase in the course of time and do so faster as your building levels increase.");
define("RESIDENCE_LOYALTY_DESC","By attacking with senators, chiefs or chieftains a village's loyalty can be brought down. If it reaches zero, the village joins the realm of the attacker. The loyalty of this village is currently at ");
define("RESIDENCE_DESC","The residence is a small palace, where the king or queen lives when (s)he visits the village. The residence protects the village against enemies who want to conquer it.");

define("PALACE","Palace");
define("PALACE_CONSTRUCTION","Palace under construction");
define("PALACE_TRAIN_DESC","In order to found a new village you need a level 10, 15 or 20 palace and 3 settlers. In order to conquer a new village you need a level 10, 15 or 20 palace and a senator, chief or chieftain.");
define("CHANGE_CAPITAL","Changer la capitale");
define("SECURITY_CHANGE_CAPITAL","Êtes-vous sûr de vouloir changer votre capitale ?<br /><b>You can\'t undo this!</b><br />Pour des raisons de sécurité, vous devez entrer votre mot de passe pour confirmer :<br />");
define("PALACE_DESC","The king or queen of the empire lives in the palace. Only one palace can exist in your realm at a time. You need a palace in order to proclaim a village to be your capital.");

define("TREASURY","Treasury");
define("TREASURY_COMMENCE","Artifacts can be viewed when treasury is completed.");
define("ARTIFACTS_AREA","Artefacts in your area");
define("NO_ARTIFACTS_AREA","There are no artefacts in your area.");
define("OWN_ARTIFACTS","Own artefacts");
define("CONQUERED","Conquered");
define("DISTANCE","Distance");
define("EFFECT","Effect");
define("ACCOUNT","Account");
define("SMALL_ARTIFACTS","Small artefacts");
define("LARGE_ARTIFACTS","Large artefacts");
define("NO_ARTIFACTS","There are no artefacts.");
define("ANY_ARTIFACTS","You do not own any artefacts.");
define("OWNER","Propriétaire");
define("AREA_EFFECT","Area of effect");
define("VILLAGE_EFFECT","Village effect");
define("ACCOUNT_EFFECT","Account effect");
define("UNIQUE_EFFECT","Unique effect");
define("REQUIRED_LEVEL","Required level");
define("TIME_CONQUER","Time of conquer");
define("TIME_ACTIVATION","Time of activation");
define("NEXT_EFFECT"," Next effect");
define("FORMER_OWNER","Former owner(s)");
define("BUILDING_STRONGER","Building stronger with");
define("BUILDING_WEAKER","Building weaker with");
define("TROOPS_FASTER","Makes troops faster with");
define("TROOPS_SLOWEST","Makes troops slowest with");
define("SPIES_INCREASE","Spies increase ability with");
define("SPIES_DECRESE","Spies decrese ability with");
define("CONSUME_LESS","All troops consume less with");
define("CONSUME_HIGH","All troops consume high with");
define("TROOPS_MAKE_FASTER","Troops make faster with");
define("TROOPS_MAKE_SLOWEST","Troops make slowest with");
define("YOU_CONSTRUCT","You can construct ");
define("CRANNY_INCREASED","Cranny capacity is increased by");
define("CRANNY_DECRESE","Cranny capacity is decrese by");
define("WW_BUILDING_PLAN","You can build the Wonder of the World");
define("NO_WW","There are no Wonders of the World");
define("NO_PREVIOUS_OWNERS","There are no previous owners.");
define("TREASURY_DESC","The riches of your empire are kept in the treasury. The treasury has room for one treasure. After you have captured an artefact it takes 24 hours on a normal server or 12 hours on a thrice speed server to be effective.");

define("TRADEOFFICE","Trade Office");
define("CURRENT_MERCHANT","Current merchant load:");
define("MERCHANT_LEVEL","Merchant load at level");
define("TRADEOFFICE_DESC","In the trade office the merchants' carts get improved and equipped with powerful horses. The higher its level the more your merchants are able to carry.");

define("GREATBARRACKS","Great Barracks");
define("TRAINING_COMMENCE_GREATBARRACKS","Training can commence when great barracks is completed.");
define("GREATBARRACKS_DESC","Foot soldiers are trained in the great barracks. The higher the level of the barracks, the faster the troops are trained.");

define("GREATSTABLE","Great Stable");
define("TRAINING_COMMENCE_GREATSTABLE","Training can commence when great stable is completed.");
define("GREATSTABLE_DESC","Cavalry can be trained in the great stable. The higher its level the faster the troops are trained.");

define("CITYWALL","Mur d'enceinte");
define("DEFENCE_NOW","Bonus de Défense actuel :");
define("DEFENCE_LEVEL","Bonus de Défense au niveau");
define("CITYWALL_DESC","En construisant un mur d'enceinte', vous pouvez protéger votre village contre les hordes barbares de vos ennemis. Plus le niveau du mur est élevé, plus le bonus accordé à la défense de vos forces est important.");

define("EARTHWALL","Mur de terre");
define("EARTHWALL_DESC","En construisant un mur de terre, vous pouvez protéger votre village contre les hordes barbares de vos ennemis. Plus le niveau du mur est élevé, plus le bonus accordé à la défense de vos forces est important.");

define("PALISADE","Palissade");
define("PALISADE_DESC","En construisant une palissade, vous pouvez protéger votre village contre les hordes barbares de vos ennemis. Plus le niveau du mur est élevé, plus le bonus accordé à la défense de vos forces est important.");

define("STONEMASON","Stonemason's Lodge");
define("CURRENT_STABILITY","Current stability bonus:");
define("STABILITY_LEVEL","Stability bonus at level");
define("STONEMASON_DESC","The stonemason's lodge is an expert at cutting stone. The further the building is extended the higher the stability of the village's buildings.");

define("BREWERY","Brewery");
define("CURRENT_BONUS","Current bonus:");
define("BONUS_LEVEL","Bonus at level");
define("BREWERY_DESC","Tasty mead is brewed in the Brewery and later quaffed by the soldiers during the celebrations.");

define("TRAPPER","Trappeur");
define("CURRENT_TRAPS","Trappes maximales actuelles à former :");
define("TRAPS_LEVEL","Nombre maximum de pièges à former au niveau");
define("TRAPS","pièges");
define("TRAP","piège");
define("CURRENT_HAVE","Vous avez actuellement");
define("WHICH_OCCUPIED","d'entre eux sont occupés.");
define("TRAINING_COMMENCE_TRAPPER","La formation peut commencer lorsque le trappeur est terminé.");
define("TRAPPER_DESC","Le trappeur protège votre village avec des pièges bien cachés. Ainsi, les ennemis imprudents peuvent être emprisonnés et ne pourront plus nuire à votre village.");

define("HEROSMANSION","Manoir du héros");
define("HERO_READY","Le héros sera prêt dans ");
define("NAME_CHANGED","Le nom du héros a été modifié");
define("NOT_UNITS","Aucune unité disponible");
define("NOT","Non ");
define("TRAIN_HERO","Former un nouveau héros");
define("REVIVE","Revive");
define("OASES","Oasis");
define("DELETE","Supprimer");
define("RESOURCES","Ressources");
define("OFFENCE","Offence");
define("DEFENCE","Defence");
define("OFF_BONUS","Off-Bonus");
define("DEF_BONUS","Def-Bonus");
define("REGENERATION","Regeneration");
define("DAY","Day");
define("EXPERIENCE","Experience");
define("YOU_CAN","You can ");
define("RESET","reset");
define("YOUR_POINT_UNTIL"," your points until you are level ");
define("OR_LOWER"," or lower!");
define("YOUR_HERO_HAS","Your hero has ");
define("OF_HIT_POINTS","of his life points");
define("ERROR_NAME_SHORT","Error: name too short");
define("HEROSMANSION_DESC","Dans le manoir du héros, vous pouvez former votre propre héros et au niveau 10, 15 et 20, vous pouvez conquérir des oasis avec le héros à proximité immédiate.");

define("GREATWAREHOUSE","Great Warehouse");
define("GREATWAREHOUSE_DESC","Wood, clay and iron are stored in the warehouse. The great warehouse offers you more space and keeps your goods drier and safer than the normal one.");

define("GREATGRANARY","Great Granary");
define("GREATGRANARY_DESC","Crop produced by your farms is stored in the granary. The great granary offers you more space and keeps your crops drier and safer than the normal one.");

define("WONDER","Wonder of the World");
define("WORLD_WONDER","World Wonder");
define("WONDER_DESC","The World Wonder (otherwise known as a Wonder of the World) is as wonderful as it sounds. This building is built in order to win the server. Each level of the World Wonder costs hundreds of thousands (even millions) of resources to build.");
define("WORLD_WONDER_CHANGE_NAME","You need to have World Wonder level 1 to be able to change its name");
define("WORLD_WONDER_NAME","World Wonder name");
define("WORLD_WONDER_NOTCHANGE_NAME","You can not change the name of the World Wonder after level 10");
define("WORLD_WONDER_NAME_CHANGED","Name changed");

define("HORSEDRINKING","Horse Drinking Trough");
define("HORSEDRINKING_DESC","The horse drinking trough of the Romans decreases the training time of cavalry and the upkeep of these troops as well.");

define("GREATWORKSHOP","Great Workshop");
define("TRAINING_COMMENCE_GREATWORKSHOP","Training can commence when great workshop is completed.");
define("GREATWORKSHOP_DESC","Siege engines like catapults and rams can be built in the great workshop. The higher its level the faster the units are produced.");

define("BUILDING_MAX_LEVEL_UNDER","Building max level under construction");
define("BUILDING_BEING_DEMOLISHED","Building presently being demolished");
define("COSTS_UPGRADING_LEVEL","Coûts</b> pour mettre à jour vers le niveau ");
define("WORKERS_ALREADY_WORK","Les ouvriers sont déjà au travail.");
define("CONSTRUCTING_MASTER_BUILDER","Construire avec un maître d'œuvre ");
define("COSTS","Coûts");
define("GOLD","Or");
define("WORKERS_ALREADY_WORK_WAITING","The workers are already at work. (waiting loop)");
define("ENOUGH_FOOD_EXPAND_CROPLAND","Pas assez de nourriture. Améliorez les champs de céréales.");
define("UPGRADE_WAREHOUSE","Upgrade Warehouse");
define("UPGRADE_GRANARY","Upgrade Granary");
define("YOUR_CROP_NEGATIVE","Your crop production is negative, you will never get the required resources.");
define("UPGRADE_LEVEL","Mettre à jour au niveau ");
define("WAITING","(waiting loop)");
define("NEED_WWCONSTRUCTION_PLAN","Need WW construction plan");
define("NEED_MORE_WWCONSTRUCTION_PLAN","Need more WW construction plan");
define("CONSTRUCT_NEW_BUILDING","Construire un nouveau bâtiment");
define("SHOWSOON_AVAILABLE_BUILDINGS","Afficher les bâtiments bientôt disponibles");
define("HIDESOON_AVAILABLE_BUILDINGS","Masquer les bâtiments bientôt disponibles");

//artefact
define("ARCHITECTS_DESC","All buildings in the area of effect are stronger. This means that you will need more catapults to damage buildings protected by this artifacts powers.");
define("ARCHITECTS_SMALL","The architects slight secret");
define("ARCHITECTS_SMALLVILLAGE","Diamond Chisel");
define("ARCHITECTS_LARGE","The architects great secret");
define("ARCHITECTS_LARGEVILLAGE","Giant Marble Hammer");
define("ARCHITECTS_UNIQUE","The architects unique secret");
define("ARCHITECTS_UNIQUEVILLAGE","Hemons Scrolls");
define("HASTE_DESC","All troops in the area of effect move faster.");
define("HASTE_SMALL","The slight titan boots");
define("HASTE_SMALLVILLAGE","Opal Horseshoe");
define("HASTE_LARGE","The great titan boots");
define("HASTE_LARGEVILLAGE","Golden Chariot");
define("HASTE_UNIQUE","The unique titan boots");
define("HASTE_UNIQUEVILLAGE","Pheidippides Sandals");
define("EYESIGHT_DESC","All spies (Scouts, Pathfinders, and Equites Legati) increase their spying ability. In addition, with all versions of this artifact you can see the incoming TYPE of troops but not how many there are.");
define("EYESIGHT_SMALL","The eagles slight eyes");
define("EYESIGHT_SMALLVILLAGE","Tale of a Rat");
define("EYESIGHT_LARGE","The eagles great eyes");
define("EYESIGHT_LARGEVILLAGE","Generals Letter");
define("EYESIGHT_UNIQUE","The eagles unique eyes");
define("EYESIGHT_UNIQUEVILLAGE","Diary of Sun Tzu");
define("DIET_DESC","All troops in the artifacts range consume less wheat, making it possible to maintain a larger army.");
define("DIET_SMALL","Slight diet control");
define("DIET_SMALLVILLAGE","Silver Platter");
define("DIET_LARGE","Great diet control");
define("DIET_LARGEVILLAGE","Sacred Hunting Bow");
define("DIET_UNIQUE","Unique diet control");
define("DIET_UNIQUEVILLAGE","King Arthurs Chalice");
define("ACADEMIC_DESC","Troops are built a certain percentage faster within the scope of the artifact.");
define("ACADEMIC_SMALL","The trainers slight talent");
define("ACADEMIC_SMALLVILLAGE","Scribed Soldiers Oath");
define("ACADEMIC_LARGE","The trainers great talent");
define("ACADEMIC_LARGEVILLAGE","Declaration of War");
define("ACADEMIC_UNIQUE","The trainers unique talent");
define("ACADEMIC_UNIQUEVILLAGE","Memoirs of Alexander the Great");
define("STORAGE_DESC","With this building plan you are able to build the Great Granary or Great Warehouse in the Village with the artifact, or the whole account depending on the artifact. As long as you posses that artifact you are able to build and enlarge those buildings.");
define("STORAGE_SMALL","Slight storage masterplan");
define("STORAGE_SMALLVILLAGE","Builders Sketch");
define("STORAGE_LARGE","Great storage masterplan");
define("STORAGE_LARGEVILLAGE","Babylonian Tablet");
define("CONFUSION_DESC","Cranny capacity is increased by a certain amount for each type of artifact. Catapults can only shoot random on villages within this artifacts power. Exceptions are the WW which can always be targeted and the treasure chamber which can always be targeted, except with the unique artifact. When aiming at a resource field only random resource fields can be hit, when aiming at a building only random buildings can be hit.");
define("CONFUSION_SMALL","Rivals slight confusion");
define("CONFUSION_SMALLVILLAGE","Map of the Hidden Caverns");
define("CONFUSION_LARGE","Rivals great confusion");
define("CONFUSION_LARGEVILLAGE","Bottomless Satchel");
define("CONFUSION_UNIQUE","Rivals unique confusion");
define("CONFUSION_UNIQUEVILLAGE","Trojan Horse");
define("FOOL_DESC","Every 24 hours it gets a random effect, bonus, or penalty (all are possible with the exception of great warehouse, great granary and WW building plans). They change effect AND scope every 24 hours. The unique artifact will always take positive bonuses.");
define("FOOL_SMALL","Artefact of the slight fool");
define("FOOL_SMALLVILLAGE","Pendant of Mischief");
define("FOOL_UNIQUE","Artefact of the unique fool");
define("FOOL_UNIQUEVILLAGE","Forbidden Manuscript");
define("WWVILLAGE","WW village");
define("ARTEFACT","<h1><b>Natars Artifacts</b></h1>

Whispering rumors echo through the villages, sharing legends told only by the best storytellers. It refers to NATARS, the most feared warrior of the TRAVIAN world. Their killing is the dream of any hero, the purpose of any fighter. No one knows how NATARS got to get such power, and their warriors so cruel. Determined to discover the source of the NATARS power, the fighters send a group of elite spies to spy them. I do not go through many hours and come back with fear in their eyes and balancing fantastic theories: it seems that the natural power comes from the mysterious objects they call artifacts that they stole from our ancestors. Try to steal the artefacts of her, and you can control their power.

<img src=\"img/x.gif\" class=\"ArtifactsAnnouncement\">

The time has come for claiming artifacts. Collaborate with your alliance and bring your worriors to get these wanted objects. However, NATARS will not give up without war to the artefacts ... nor your enemies. If you are successful in retrieving artifacts and you will be able to reject enemies, you will be able to collect the rewards. Your buildings will become incredibly strong and mightest, and the troops will be much faster and will consume less food. Capture the artifacts, bring glory over your empire and become new legends for your followers.

To steal one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the treasury
4. An empty treasury level 10 for SMALL ARTIFACTS and level 20 for LARGE ARTIFACT must be in the village where that attack came from
5. Have a hero in an attack

If not, the next attack on that village, winning with a hero and empty treasury will take the artifact.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server.

There will be a countdown in game, showing the exact time of the release, 5 days prior to the launch. ");

//WW Village Release Message
define("WWVILLAGEMSG","<h1><b>Wonder of the World Villages</b></h1>

Countless days have passed since the first battles upon the walls of the cursed villages of the Dread Natars, many armies of both the free ones and the Natarian empire struggled and died before the walls of the many strongholds from which the Natars had once ruled all creation. Now with the dust settled and a relative calm having settled in, armies began to count their losses and collect their dead, the stench of combat still lingering in the night air, a smell of a slaughter unforgettable in its extent and brutality yet soon to be dwarfed by yet others. The largest armies of the free ones and the Dread Natars were marshalling for yet another renewed assault upon the coveted former strongholds of the Natarian Empire.
Soon scouts arrived telling of a most awesome sight and a chilling reminder, a dread army of an unfathomable size had been spotted marshalling at the end of the world, the Natarian capital, a force so great and unstoppable that the dust from their march would choke off all light, a force so brutal and ruthless that it would crush all hope. The free people knew that they had to race now, race against time and the endless hordes of the Natarian Empire to raise a Wonder of the World to restore the world to peace and vanquish the Natarian threat.
But to raise such a great Wonder would be no easy task, one would need construction plans created in the distant past, plans of such an arcane nature that even the very wisest of sages knew not their contents or locations.
Tens of thousands of scouts roamed across all existence searching in vain for these mystical plans, looking in all places but the dreaded Natarian Capital, yet could not find them. Today however, they return bearing good news, they return baring the locations of the plans, hidden by the armies of the Natars inside secret strongholds constructed to be hidden from the eyes of man.
Now begins the final stretch, when the greatest armies of the Free people and the Natars will clash across the world for the fate of all that lies under heaven. This is the war that will echo across the eons, this is your war, and here you shall etch your name across history, here you shall become legend.

<img src=\"img/x.gif\" class=\"WWVillagesAnnouncement\" title=\"".WWVILLAGE."\" alt=\"".WWVILLAGE."\">

To conquer one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the RESIDENCE
4. You must decrease the loyalty to 0 with : SENATORS , CHIEF , CHIEFTAIN
5. You must have enough culture points to conquer the village

If not, the next attack on that village, winning with a SENATORS , CHIEF , CHIEFTAIN and empty slots in RESIDENCE/PALACE will take the village.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server.

There will be a countdown in game, showing the exact time of the release, ".(5 / SPEED)." days prior to the launch. ");

//Building Plans
define("PLAN","Ancient Construction Plan");
define("PLANVILLAGE","WW Buildingplan");
define("PLAN_DESC","With this ancient construction plan you will able to build World Wonder to level 50. to build further, your alliance must hold at least two plans.");
define("PLAN_INFO","<h1><b>World Wonder Construction Plans</b></h1>


Many moons ago the tribes of Travian were surprised by the unforeseen return of the Natars. This tribe from immemorial times surpassing all in wisdom, might and glory was about to trouble the free ones again. Thus they put all their efforts in preparing a last war against the Natars and vanquishing them forever. Many thought about the so-called 'Wonders of the World', a construction of many legends, as the only solution. It was told that it would render anyone invincible once completed. Ultimately making the constructors the rulers and conquerors of all known Travian.

However, it was also told that one would need construction plans to construct such a building. Due to this fact, the architects devised cunning plans about how to store these safely. After a while, one could see temple-like buildings in many a city and metropolis - the Treasure Chambers (Treasuries).

Sadly, no one - not even the wise and well versed - knew where to find these construction plans. The harder people tried to locate them, the more it seemed as if they where only legends.

Today, however, this last secret will be revealed. Deprivations and endeavors of the past will not have been in vain, as today scouts of several tribes have successfully obtained the whereabouts of the construction plans. Well guarded by the Natars, they lie hidden in several oases to be found all over Travian. Only the most valiant heroes will be able to secure such a plan and bring it home safely so that the construction can begin.

In the end, we will see whether the free tribes of Travian can once again outwit the Natars and vanquish them once and for all. Do not be so foolish as to assume that the Natars will leave without a fight, though!

<img src=\"img/x.gif\" class=\"WWBuildingPlansAnnouncement\" title=\"".PLAN."\" alt=\"".PLAN."\">

To steal a set of Construction Plans from the Natars, the following things must happen:
- You must Attack the village (NOT Raid!)
- You must WIN the Attack
- You must DESTROY the Treasure Chamber (Treasury)
- Your Hero MUST be in that attack, as he is the only one who may carry the Construction Plans
- An empty level 10 Treasure Chamber (Treasury) MUST be in the village where that attack came from
NOTE: If the above criteria is not met during the attack, the next attack on that village which does meet the above criteria will take the Construction Plans.



To build a Treasure Chamber (Treasury), you will need a Main Building level 10 and the village MUST NOT be  contain a World Wonder.

To build a World Wonder, you must own the Construction Plans yourself (you = the World Wonder Village Owner) from level 0 to 50, and then from level 51 to 100 you will need an additional set of Construction Plans in your Alliance! Two sets of Construction Plans in the World Wonder Village Account will not work!");

//Admin setting - Admin/Templates/config.tpl & editServerSet.tpl
define("EDIT_BACK","Back");
define("SERV_CONFIG","Server Configuration");
define("SERV_SETT","Server Settings");
define("EDIT_SERV_SETT","Edit Server Settings");
define("SERV_VARIABLE","Variable");
define("SERV_VALUE","Value");
define("CONF_SERV_NAME","Server Name");
define("CONF_SERV_NAME_TOOLTIP","Name of the game server.");
define("CONF_SERV_STARTED","Server Started");
define("CONF_SERV_STARTED_TOOLTIP","Time when the game server was started. This parameter can not be changed on the installed game server.");
define("CONF_SERV_TIMEZONE","Server Timezone");
define("CONF_SERV_TIMEZONE_TOOLTIP","Timezone of the game server.");
define("CONF_SERV_LANG","Language");
define("CONF_SERV_LANG_TOOLTIP","The language that is used in the admin panel and for everyone on the game server by default.");
define("CONF_SERV_SERVSPEED","Server Speed");
define("CONF_SERV_SERVSPEED_TOOLTIP","The speed of the game server. The higher the speed of the game server, the faster all buildings are built, the studies and improvements in the smithies are carried out, the troops are quickly built and the productivity of all resources is increased.");
define("CONF_SERV_TROOPSPEED","Troop Speed");
define("CONF_SERV_TROOPSPEED_TOOLTIP","Speed of movement of troops on the game server. The higher this indicator, the faster the troops move across the map.");
define("CONF_SERV_EVASIONSPEED","Evasion Speed");
define("CONF_SERV_EVASIONSPEED_TOOLTIP","The evasion speed is the time that troops spend on the road to return home after evasion an attack.");
define("CONF_SERV_STORMULTIPLER","Storage Multipler");
define("CONF_SERV_STORMULTIPLER_TOOLTIP","A multiplier for the storage capacity warehouse and granary. The value 1 is equal to the capacity of 80,000 of each resource at the maximum level. If you set the value to 2, then the capacity at the maximum level will be 160,000 of each resource.<br><b>Note:</b> the amount of resources that will be generated by unoccupied oases for robbery depends on this value. The default is 800. If you set the value to 2, the maximum number for each resource being generated is 1600.");
define("CONF_SERV_TRADCAPACITY","Trader Capacity");
define("CONF_SERV_TRADCAPACITY_TOOLTIP","A multiplier for the capacity of resources that can be carried by one trader. The value of 1 equals 500 capacity for the Romans, 750 for the Gauls, 1000 for the Teutons. If you set the value to 2, then the capacity of the transferred resources will double accordingly, 1000, 1500, 2000.");
define("CONF_SERV_CRANCAPACITY","Cranny Capacity");
define("CONF_SERV_CRANCAPACITY_TOOLTIP","A multiplier for the capacity of resources in Cranny, which can be saved from robbery. The value of 1 is equal to 1000 for Romans and Teutons, 2000 for Gauls. If you set the value to 2, then the capacity of the Cranny will double to 2000 and 4000 respectively.");
define("CONF_SERV_TRAPCAPACITY","Trapper Capacity");
define("CONF_SERV_TRAPCAPACITY_TOOLTIP","A multiplier for the capacity of the trap of the Gauls, which can capture enemy soldiers even before attacking the village. The value of 1 is equal to the capacity of 400 at the 20 level of construction. If you set the value to 2, then the capacity will be 800.");
define("CONF_SERV_NATUNITSMULTIPLIER","Natars Units Multiplier");
define("CONF_SERV_NATUNITSMULTIPLIER_TOOLTIP","This parameter is responsible for the number of troops of Natars, on artifacts and WW villages.");
define("CONF_SERV_NATARS_SPAWN_TIME","Natars Spawn");
define("CONF_SERV_NATARS_SPAWN_TIME_TOOLTIP","After how long Natars and artifacts will spawn from the start date of the server, in days");
define("CONF_SERV_NATARS_WW_SPAWN_TIME","World Wonders Spawn");
define("CONF_SERV_NATARS_WW_SPAWN_TIME_TOOLTIP","After how long WW villages will spawn from the start date of the server, in days");
define("CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME","WW Building Plan Spawn");
define("CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME_TOOLTIP","After how long WW building plans will spawn from the start date of the server, in days");
define("CONF_SERV_MAPSIZE","Map Size");
define("CONF_SERV_MAPSIZE_TOOLTIP","The size of the map of the game world. Can not be changed on an already installed game server.");
define("CONF_SERV_VILLEXPSPEED","Village Expanding Speed");
define("CONF_SERV_VILLEXPSPEED_TOOLTIP","Speed, which affects the expansion of the empire. With a slow speed more culture points are needed to found new village, with a fast speed the required number of culture points is reduced.");
define("CONF_SERV_BEGINPROTECT","Beginners Protection");
define("CONF_SERV_BEGINPROTECT_TOOLTIP","Protection, which prohibits a certain time to attack the villages of new players.");
define("CONF_SERV_REGOPEN","Register Open");
define("CONF_SERV_REGOPEN_TOOLTIP","Allows to enable (True) or disable (False) the registration of players on the game server.");
define("CONF_SERV_ACTIVMAIL","Activation Mail");
define("CONF_SERV_ACTIVMAIL_TOOLTIP","If enabled (Yes), during registration it will be necessary to confirm email address. If disabled (No) does not require confirmation of e-mail.");
define("CONF_SERV_QUEST","Quest");
define("CONF_SERV_QUEST_TOOLTIP","Enable (Yes) or disable (No) the quest on the game server.");
define("CONF_SERV_QTYPE","Quest Type");
define("CONF_SERV_QTYPE_TOOLTIP","The quest type can be official which is a bit shorter, and extended which is longer.");
define("CONF_SERV_DLR","Demolish - Level required");
define("CONF_SERV_DLR_TOOLTIP","The required level of the main building, on which can carry out the demolition of buildings in the village.");
define("CONF_SERV_WWSTATS","World Wonder - Statistics");
define("CONF_SERV_WWSTATS_TOOLTIP","Enable (True) or disable (False) the display in the statistics of villages with a Wonder of the World.");
define("CONF_SERV_NTRTIME","Nature Troops Regeneration Time");
define("CONF_SERV_NTRTIME_TOOLTIP","Time through which the nature troops will be restored in oases.");
define("CONF_SERV_OASIS_WOOD_PROD_MULT","Oasis Wood Production Multiplier");
define("CONF_SERV_OASIS_WOOD_PROD_MULT_TOOLTIP","The base wood oasis production");
define("CONF_SERV_OASIS_CLAY_PROD_MULT","Oasis Clay Production Multiplier");
define("CONF_SERV_OASIS_CLAY_PROD_MULT_TOOLTIP","The base clay oasis production");
define("CONF_SERV_OASIS_IRON_PROD_MULT","Oasis Iron Production Multiplier");
define("CONF_SERV_OASIS_IRON_PROD_MULT_TOOLTIP","The base iron oasis production");
define("CONF_SERV_OASIS_CROP_PROD_MULT","Oasis Crop Production Multiplier");
define("CONF_SERV_OASIS_CROP_PROD_MULT_TOOLTIP","The base crop oasis production");
define("CONF_SERV_MEDALINTERVAL","Medal Interval");
define("CONF_SERV_MEDALINTERVAL_TOOLTIP","The time interval for issuing medals for the top players and alliances. If this parameter is changed on the installed server, the time interval changes after the subsequent issuance of the medals.");
define("CONF_SERV_TOURNTHRES","Tourn Threshold");
define("CONF_SERV_TOURNTHRES_TOOLTIP","The number of squares on the game map, after which Tournament Square will start working.");
define("CONF_SERV_GWORKSHOP","Great Workshop");
define("CONF_SERV_GWORKSHOP_TOOLTIP","Enable (True) or disable (False) the use of a Great Workshop in the game.");
define("CONF_SERV_NATARSTAT","Show Natars in Statistics");
define("CONF_SERV_NATARSTAT_TOOLTIP","Enable (True) or disable (False) the display of the Natars account in statistics.");
define("CONF_SERV_PEACESYST","Peace system");
define("CONF_SERV_PEACESYST_TOOLTIP","Enable or disable the Peace system. When the peace system is activated, players will be able to attack each other but instead of any actions in the reports there will be a congratulatory inscription. The troops will not die of hunger.");
define("CONF_SERV_GRAPHICPACK","Graphic Pack");
define("CONF_SERV_GRAPHICPACK_TOOLTIP","Enable (Yes) or disable (No) the ability to use the graphics package.");
define("CONF_SERV_ERRORREPORT","Error Reporting");
define("CONF_SERV_ERRORREPORT_TOOLTIP","Enable (Yes) or disable (No) the display of error reports on the game server.");

//Admin setting - Admin/Templates/config.tpl & editPlusSet.tpl
define("PLUS_CONFIGURATION","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Configuration");
define("PLUS_SETT","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Settings");
define("EDIT_PLUS_SETT","Edit <b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Setting");
define("EDIT_PLUS_SETT1","Edit PLUS Setting");
define("CONF_PLUS_PAYPALEMAIL","<a href='https://www.paypal.com' target='_blank'>PayPal</a> E-Mail Address");
define("CONF_PLUS_PAYPALEMAIL_TOOLTIP","The E-Mail Address specified at registration on PayPal.<br><font color='red'><b>Must be Business or Premier account!</b></font>");
define("CONF_PLUS_CURRENCY","Payment Currency");
define("CONF_PLUS_CURRENCY_TOOLTIP","The currency to be used for payment.");
define("CONF_PLUS_PACKAGEGOLDA","Package \"A\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDA_TOOLTIP","The amount of gold issued for the payment of the package \"A\".");
define("CONF_PLUS_PACKAGEPRICEA","Package \"A\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEA_TOOLTIP","The amount necessary to pay the cost of package \"A\".");
define("CONF_PLUS_PACKAGEGOLDB","Package \"B\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDB_TOOLTIP","The amount of gold issued for the payment of the package \"B\".");
define("CONF_PLUS_PACKAGEPRICEB","Package \"B\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEB_TOOLTIP","The amount necessary to pay the cost of package \"B\".");
define("CONF_PLUS_PACKAGEGOLDC","Package \"C\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDC_TOOLTIP","The amount of gold issued for the payment of the package \"C\".");
define("CONF_PLUS_PACKAGEPRICEC","Package \"C\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEC_TOOLTIP","The amount necessary to pay the cost of package \"C\".");
define("CONF_PLUS_PACKAGEGOLDD","Package \"D\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDD_TOOLTIP","The amount of gold issued for the payment of the package \"D\".");
define("CONF_PLUS_PACKAGEPRICED","Package \"D\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICED_TOOLTIP","The amount necessary to pay the cost of package \"D\".");
define("CONF_PLUS_PACKAGEGOLDE","Package \"E\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDE_TOOLTIP","The amount of gold issued for the payment of the package \"E\".");
define("CONF_PLUS_PACKAGEPRICEE","Package \"E\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEE_TOOLTIP","The amount necessary to pay the cost of package \"E\".");
define("CONF_PLUS_ACCDURATION","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> account duration");
define("CONF_PLUS_ACCDURATION_TOOLTIP","The duration of the game function <b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> for the account at the time of activation by the player.");
define("CONF_PLUS_PRODUCTDURATION","+25% production duration");
define("CONF_PLUS_PRODUCTDURATION_TOOLTIP","The duration of the game function +25% production duration for the account at the time of activation by the player.");

//Admin setting - Admin/Templates/config.tpl & editLogSet.tpl
define("LOG_SETT","Log Settings");
define("EDIT_LOG_SETT","Edit Log Setting");
define("CONF_LOG_BUILD","Log Build");
define("CONF_LOG_BUILD_TOOLTIP","Enable (Yes) or disable (No) the display of logs for the construction of buildings in the village.");
define("CONF_LOG_TECHNOLOGY","Log Technology");
define("CONF_LOG_TECHNOLOGY_TOOLTIP","Enable (Yes) or disable (No) display logs to improve troops in Blacksmith and Armoury.");
define("CONF_LOG_LOGIN","Log Login");
define("CONF_LOG_LOGIN_TOOLTIP","Enable (Yes) or disable (No) the display logs players login the game.");
define("CONF_LOG_GOLD","Log Gold");
define("CONF_LOG_GOLD_TOOLTIP","Enable (Yes) or disable (No) the display of gold use logs in-game by players.");
define("CONF_LOG_ADMIN","Log Admin");
define("CONF_LOG_ADMIN_TOOLTIP","Enable (Yes) or disable (No) the display of logs for administrator actions in the control panel.");
define("CONF_LOG_WAR","Log War");
define("CONF_LOG_WAR_TOOLTIP","Enable (Yes) or disable (No) the display of logs attacks on players in the game.");
define("CONF_LOG_MARKET","Log Market");
define("CONF_LOG_MARKET_TOOLTIP","Enable (Yes) or disable (No) the display of the logs of the use of the market in the game by the players.");
define("CONF_LOG_ILLEGAL","Log Illegal");
define("CONF_LOG_ILLEGAL_TOOLTIP","Enable (Yes) or disable (No) the display of illegal logs. (I do not know exactly what it is)");

//Admin setting - Admin/Templates/config.tpl & editNewsboxSet.tpl
define("NEWSBOX_SETT","Newsbox Settings");
define("EDIT_NEWSBOX_SETT","Edit Newsbox Setting");
define("EDIT_NEWSBOX1","Newsbox 1");
define("EDIT_NEWSBOX1_TOOLTIP","Enable or disable the display of the Newsbox 1. Displayed on the authorization page and on the game pages.");
define("EDIT_NEWSBOX2","Newsbox 2");
define("EDIT_NEWSBOX2_TOOLTIP","Enable or disable the display of the Newsbox 2. Displayed on the authorization page and on the game pages.");
define("EDIT_NEWSBOX3","Newsbox 3");
define("EDIT_NEWSBOX3_TOOLTIP","Enable or disable the display of the Newsbox 3. Displayed on the authorization page and on the game pages.");

//Admin setting - Admin/Templates/config.tpl SQL Settings
define("SQL_SETTINGS","SQL Settings");
define("CONF_SQL_HOSTNAME","Hostname");
define("CONF_SQL_HOSTNAME_TOOLTIP","The name of the server where MySQL is started (by default is: localhost).");
define("CONF_SQL_PORT","Port");
define("CONF_SQL_PORT_TOOLTIP","MySQL port for remote connection. The standard port for connecting is: 3306.");
define("CONF_SQL_DBUSER","DB Username");
define("CONF_SQL_DBUSER_TOOLTIP","The user name to connect to the database.");
define("CONF_SQL_DBPASS","DB Password");
define("CONF_SQL_DBPASS_TOOLTIP","Password from the user to connect to the database.");
define("CONF_SQL_DBNAME","DB Name");
define("CONF_SQL_DBNAME_TOOLTIP","Name of the database to which you are connecting.");
define("CONF_SQL_TBPREFIX","Table Prefix");
define("CONF_SQL_TBPREFIX_TOOLTIP","The prefix used for the database tables.");
define("CONF_SQL_DBTYPE","DB Type");
define("CONF_SQL_DBTYPE_TOOLTIP","The type of database used.");

//Admin setting - Admin/Templates/config.tpl & editExtraSet.tpl
define("EXTRA_SETT","Extra Settings");
define("EDIT_EXTRA_SETT","Edit Extra Settings");
define("CONF_EXTRA_LIMITMAIL","Limit Mailbox");
define("CONF_EXTRA_LIMITMAIL_TOOLTIP","Enable (Yes) or disable (No) the mailbox limit.");
define("CONF_EXTRA_MAXMAIL","Max number of mails");
define("CONF_EXTRA_MAXMAIL_TOOLTIP","The maximum number of messages that can fit in the mailbox.");

//Admin setting - Admin/Templates/config.tpl & editAdminInfo.tpl
define("ADMIN_INFO","Admin Information");
define("EDIT_ADMIN_INFO","Edit Admin Information");
define("CONF_ADMIN_NAME","Admin Name");
define("CONF_ADMIN_NAME_TOOLTIP","Name for the administrator account.");
define("CONF_ADMIN_EMAIL","Admin E-Mail");
define("CONF_ADMIN_EMAIL_TOOLTIP","The email address for the administrator account.");
define("CONF_ADMIN_SHOWSTATS","Include Admin in Stats");
define("CONF_ADMIN_SHOWSTATS_TOOLTIP","Enable (True) or disable (False) the display of the administrator account in the general statistics of players.");
define("CONF_ADMIN_SUPPMESS","Include Support Messages");
define("CONF_ADMIN_SUPPMESS_TOOLTIP","Enable (True) or disable (False) the sending of messages to the mailbox of the administrator addressed to Support.");
define("CONF_ADMIN_RAIDATT","Allow Raided and Attacked");
define("CONF_ADMIN_RAIDATT_TOOLTIP","Enable (True) or disable (False) the ability to Raided and Attacked an administrator.");

/*
|--------------------------------------------------------------------------
|   Index
|--------------------------------------------------------------------------
*/

	   $lang['index'][0][1] = "Bienvenue sur " . SERVER_NAME . "";
	   $lang['index'][0][2] = "Guide";
	   $lang['index'][0][3] = "Jouez maintenant, gratuitement !";
	   $lang['index'][0][4] = "" . SERVER_NAME . ", c'est quoi ?";
	   $lang['index'][0][5] = "" . SERVER_NAME . " est un <b>jeu par navigateur</b> qui met en scène un monde antique fascinant avec des milliers d'autres joueurs réels.</p><p>C'est <strong>totalement gratuit</strong> et ne requiert <strong>aucun téléchargement</strong>.";
	   $lang['index'][0][6] = "Cliquez ici pour rejoindre " . SERVER_NAME . "";
	   $lang['index'][0][7] = "Nombre de joueurs ";
	   $lang['index'][0][8] = "Joueurs actifs ";
	   $lang['index'][0][9] = "Joueurs en ligne ";
	   $lang['index'][0][10] = "À propos du jeu";
	   $lang['index'][0][11] = "Vous commencerez en tant que chef d'un petit village et vous vous lancerez dans une quête passionnante.";
	   $lang['index'][0][12] = "Construisez des villages, livrez des guerres ou établissez des routes commerciales avec vos voisins.";
	   $lang['index'][0][13] = "Jouez avec et contre des milliers d'autres joueurs réels et partez à la conquête du monde de Travian.";
	   $lang['index'][0][14] = "Actualités";
	   $lang['index'][0][15] = "FAQ";
	   $lang['index'][0][16] = "Captures d'écran";
	   $lang['forum'] = "Forum";
	   $lang['register'] = "Inscription";
	   $lang['login'] = "Connexion";
	   $lang['screenshots']['title1']="Village";
	   $lang['screenshots']['desc1']="Construction du village";
           $lang['screenshots']['title2']="Ressources";
           $lang['screenshots']['desc2']="Les ressources du village sont le bois, l'argile, le fer et les cultures.";
           $lang['screenshots']['title3']="Carte";
           $lang['screenshots']['desc3']="Localisation de votre village sur la carte";
           $lang['screenshots']['title4']="Construction de bâtiments";
           $lang['screenshots']['desc4']="Comment construire un bâtiment ou un niveau de ressources";
           $lang['screenshots']['title5']="Rapport";
           $lang['screenshots']['desc5']="Votre rapport d'attaque";
           $lang['screenshots']['title6']="Statistiques";
           $lang['screenshots']['desc6']="Voir votre rang dans les statistiques";
           $lang['screenshots']['title7']="Armes ou pognon";
           $lang['screenshots']['desc7']="Vous pouvez choisir de jouer en tant que militaire ou économiste";


?>
