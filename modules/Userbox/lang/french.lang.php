<?php
if (!defined("INDEX_CHECK"))
{
	exit('You can\'t run this file alone.');
}
define("_POSTMESS","Poster un message");
define("_AUTHOR","Auteur");
define("_USERFOR","Pour");
define("_SUBJECT","Sujet");
define("_USERMESS","Message");
define("_SEND","Envoyer");
define("_BACK","Retour");
define("_EMPTYFIELD","Assurez vous que tous les champs soient remplis");
define("_UNKNOWMEMBER","D�sol�, le membre est inconnu.");
define("_MESSSEND","Message envoy� avec succ�s.");
define("_PRIVATEMESS","Messages Priv�s");
define("_OF","De");
define("_THE","le");
define("_WROTE","a ecrit");
define("_REPLY","R�pondre");
define("_DEL","Supprimer");
define("_NOSELECTMESS","Aucun message s�lectionn�");
define("_MESSDEL","Message supprim� avec succ�s.");
define("_DELETEMESS","Vous �tes sur le point de supprimer le message de");
define("_DELETEMESSAGES","Vous �tes sur le point de supprimer les messages");
define("_MESSAGESDEL","Messages supprim�s avec succ�s.");
define("_CONFIRM","Continuer ?");
define("_BY","Par");
define("_CLEARSUCCES","effac� avec succ�s.");
define("_DELCONFIRM","Confirmer");
define("_CANCEL","Annuler");
define("_DELBOX","Sup");
define("_FROM","Provenant de");
define("_DATE","Date");
define("_SEEDETAILUSER","Voir les d�tails de l'auteur");
define("_READMESS","Lire message");
define("_STATUS","Status");
define("_READ","Lu");
define("_NOTREAD","Non lu");
define("_CHECKALL","Tout Cocher");
define("_UNCHECKALL","Tout D�cocher");
define("_NOMESSPV","Vous n'avez pas de message...");
define("_SENDNEWMESS","Nouveau");
define("_NOFLOOD","Vous avez d�ja post� un email il y'a moins de " . $nuked['post_flood'] . " secondes,<br />veuillez patienter avant de renvoyer un autre email...");

/* Patche Stive */
define("_NEW","Nouveau");
define("_ARCHIVES","Archives");
define("_PREF","Pr�f�rences");
define("_DELALL","Supprimer tous");
define("_OUTBOX","Bo�te d'envoi");
define("_ATE","Archives - Effacer");
define("_ATE2","Lire - Effacer");
define("_RESPTO","R�pondre a");
define("_INDEX","Index");
define("_MESSDELALL","Tous les Message supprim� avec succ�s.");
define("_ARCHMSG","Archiver ce message");
define("_TRANSFMSG","Transf�rer le message");
define("_DELMSG","Effacer le message");
define("_SENDTO","Envoyer �");
define("_NOSENDMSG","&nbsp;&nbsp;&nbsp;Ne plus m'envoyer de message priv� :  ");
define("_MAILMP","M'avertir par �mail d'un message priv� :  ");
define("_FROM1","Provient de ");
define("_NOMPSEND","Utilisateurs ne veut pas �tre contact�");
define("_MPMAIL","<p>Bonjour,</p> <p>Vous avez re�u un nouveau message priv� de la part de ");
define("_MPMAIL2","</p><p>vous pouvez d�s � pr�sent le lire <a href=\"" . $nuked['url'] . "/index.php?file=Userbox\" title=\"Message priv�\">ici</a></p>");
define("_MPFULL","Votre bo�te aux lettres est pleine, merci de bien vouloir la vid�e");

define("_ADMINUSERBOX","Administration Message priv�");
define("_ADMINUSERBOXMAXMP","Nombre de message priv� maximum");
define("_ADMINUSERBOXBG1","Background Titre");
define("_ADMINUSERBOXBG2","Background 1");
define("_ADMINUSERBOXBG3","Background 2");
define("_ADMINUSERBOXMOZ","Coin arrondi");
define("_REGISTER","Enregistrer");
define("_PREFOK","Pr�f�rence sauvegarder");
define("_ADMINUSERBOXCOLOR0","Couleur du texte");
define("_ADMINUSERBOXCOLOR1","Couleur des liens");
?>