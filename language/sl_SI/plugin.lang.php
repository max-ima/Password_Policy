<?php
$lang['PP_Title'] = 'Politika gesla – Različica: ';
$lang['PP_SubTitle'] = 'Konfiguracija vtičnika';
$lang['PP_submit'] = 'Pošlji nastavitve';
$lang['PP_save_config'] ='Nastavitve so shranjene.';
$lang['PP_Disable'] = ' Onemogoči (privzeto)';
$lang['PP_Enable'] = ' Omogoči';
$lang['PP_Support_txt'] = 'Uradna podpora za ta vtičnik je samo v teh temah foruma Piwigo:<br/>
<a href="http://piwigo.org/forum/viewtopic.php?id=22863" onclick="window.open(this.href);return false;">Angleški forum - http://piwigo.org/forum/viewtopic.php?id=22863</a>';
$lang['PP_PasswordTest'] = 'Izračun ocene';
$lang['PP_ScoreTest'] = 'Rezultat: ';
$lang['PP_Error_Password_Mandatory'] = 'Varnost: Geslo je obvezno!';
$lang['PP_Error_Password_Need_Enforcement_%s'] = 'Varnost: Nadzorni sistem izračuna rezultat glede na kompleksnost izbranih gesel. Zapletenost vašega gesla je prenizka (ocena = %s). Prosimo, izberite novo geslo, ki je varnejše, tako da upoštevate ta pravila:<br/>
- Uporabite črke in številke<br/>
- Uporabite male in velike črke<br/>
- Povečajte njegovo dolžino (število znakov)<br/>
Najmanjša ocena gesel, ki jo zahteva skrbnik, je: ';
$lang['PP_Password_Enforced'] = 'Krepitev stopnje varnosti gesel';
$lang['PP_Password_Enforced_true'] = ' Omogoči. Najmanjša ocena: ';
$lang['PP_AdminPassword_Enforced'] = 'Prijava na administratorje';
$lang['PP_Password_Reset_Msg'] = 'Prosimo, spremenite svoje geslo!';
$lang['PP_PwdReset'] = 'Obnovitev gesla';
$lang['PP_Password reset selected users'] = 'Zahtevajte obnovitev gesla za izbrane uporabnike';
$lang['PP_Guest cannot be pwdreset'] = 'Za račun gostov ni mogoče nastaviti obnovitve gesla!';
$lang['PP_Default user cannot be pwdreset'] = 'Obnovitve gesla ni mogoče nastaviti za privzeti uporabniški račun!';
$lang['PP_Webmaster cannot be pwdreset'] = 'Za račun spletnega skrbnika ni mogoče nastaviti obnovitve gesla!';
$lang['PP_Generic cannot be pwdreset'] = 'Obnovitve gesla ni mogoče nastaviti za splošne račune!';
$lang['PP_Admins cannot be pwdreset'] = 'Za skrbniški račun ni mogoče nastaviti obnovitve gesla!';
$lang['PP_You cannot pwdreset your account'] = 'Obnovitve gesla ni mogoče nastaviti za svoj račun!';
$lang['PP_You need to confirm pwdreset'] = 'Potrditi morate obnovitev gesla (potrditveno polje)!';
$lang['PP_PwdReset_Todo'] = 'Geslo, ki ga je treba obnoviti';
$lang['PP_PwdReset_Done'] = 'Obnovljeno geslo';
$lang['PP_PwdReset_NA'] = 'Originalno geslo';
$lang['PP %d user pwdreseted'] = 'Za %d uporabnika je potrebna obnovitev gesla';
$lang['PP %d users pwdreseted'] = 'Obnova gesla je potrebna za %d uporabnikov';
$lang['PP_passwtestTitle'] = 'Preizkušanje zapletenosti gesla';
$lang['PP_passwtestTitle_d'] = 'Vnesite geslo za testiranje in nato kliknite &quot;Izračun ocene&quot; da vidite rezultat.';
$lang['PP_passwTitle_d'] = 'Če omogočite to možnost, je ob registraciji obvezen zaseg gesla in zahteva, da geslo, ki ga izbere obiskovalec, ustreza minimalni stopnji zapletenosti. Če prag ni dosežen, se prikažeta doseženi rezultat in najmanjši rezultat, ki ga je treba doseči, skupaj s priporočili za povečanje vrednosti tega rezultata.<br/><br/>
Obstaja terenski preizkus za merjenje zapletenosti gesla in si lahko privoščite, da dobite predstavo o rezultatu za opredelitev zapletene meritve.<br/><br/>
Opomba: Rezultat gesla se izračuna na podlagi več parametrov: dolžine, vrste uporabljenih znakov (črke, števke, velike, male črke, posebni znaki). Ocena pod 100 se šteje za nizko, od 100 do 500, kompleksnost je povprečna; nad 500 je varnost odlična.';
$lang['PP_passwadmTitle_d'] = 'Skrbnik lahko ustvari uporabniški račun z ali brez uporabe pravila zapletenosti računanja.<br/><br/>
Opomba: Če ustvarjeni uporabniški račun želi spremeniti geslo in je krepitev gesel za uporabnike aktivna, bo zanj veljal nabor pravil.';
$lang['PP_PwdResetTitle_d'] = 'Če omogočite to možnost, bo na zavihku za upravljanje dodana nova funkcija za obnovitev gesla za izbrane uporabnike. Poleg tega je dodan nov stolpec, ki prikazuje stanje gesel za vsako od njih z naslednjimi vrednostmi:<br/><br/>
– Geslo za obnovitev: načrtovana je bila zahteva za obnovitev gesla.<br/>
- Geslo je bilo obnovljeno: geslo je bilo obnovljeno po zahtevi.<br/>
– Izvirno geslo: izvirno geslo, izbrano ob ustvarjanju računa in ni bilo nikoli potrebno za obnovo.<br/><br/>
<b style=&quot;color: red;&quot;>Računi spletnih skrbnikov, splošni in gostujoči računi so izključeni iz te funkcije.</b><br/><br/>
Ti uporabniki bodo samodejno preusmerjeni na svojo stran za prilagajanje pri vsaki njihovi povezavi, dokler ne spremenijo gesla, na tej strani pa bo prikazano izrecno sporočilo.';
$lang['PP_User_Account_Locked_Txt'] = 'Oprostite, zaradi varnostnih razlogov je bil vaš dostop do galerije zaklenjen zaradi preveč neuspešnih poskusov prijave. To je lahko posledica poskusa vdora v vaš račun. Obrnite se na skrbnika spletnega mesta, da zahtevate odklepanje.';
$lang['PP_LoginAttempts'] = 'Upravljanje neuspelih poskusov prijave';
$lang['PP_LoginAttempts_d'] = 'Ta možnost omogoča beleženje neuspešnih poskusov prijave v galerijo zaradi napačnega gesla in samodejno zaklene zadevni uporabniški račun. Zasnovan je za preprečevanje morebitnih poskusov vdora z uporabo slovarjev gesel.<br/><br/>
<b style=&quot;color: red;&quot;>Računi spletnih skrbnikov, splošni in gostujoči računi so izključeni iz te funkcije.</b><br/><br/>
Z omogočanjem boste lahko določili največje dovoljeno število neuspelih poskusov pred zaklepanjem in definirali sporočilo po meri uporabniku, ki je zaklenil svoj račun. To sporočilo se prikaže samo, če uporabniku po zaklepanju uspe identifikacija.<br/><br/>
Če želite odkleniti račune, pojdite na zavihek za upravljanje. Našli boste nov stolpec, ki označuje stanje računov, označeno z rdečim simbolom (za zaklenjen račun) in zelenim (za odklenjen račun). Izberite enega ali več računov za odklepanje in uporabite gumb za odklepanje, da uporabite dejanje.';
$lang['PP_Max number of failed attempts'] = 'Največje število neuspelih poskusov: ';
$lang['PP_Max number of failed attempts_d'] = 'Številka 0 onemogoči poskuse štetja.';
$lang['PP_UserLocked_Custom_Txt'] = 'Prilagajanje informacijskega sporočila zaklenjenemu uporabniku';
$lang['PP_UserLocked_Custom_Txt_d'] = 'Tukaj lahko spremenite besedilo sporočila, ki se prikaže uporabniku, katerega račun je bil zaklenjen. Če želite uporabljati več jezikov, lahko uporabite oznake vtičnika za razširjeni opis (Extended description), če je aktiven.';
$lang['PP_LockedUsers'] = 'Stanje zaklepanja';
$lang['PP_Unlock'] = 'Odklepanje';
$lang['PP_Unlock selected users'] = 'Odklenite izbrane uporabnike';
$lang['PP_Guest is not unlockable'] = 'Gostujočih uporabnikov ni mogoče zakleniti in jih ni mogoče odkleniti';
$lang['PP_Default user is not unlockable'] = 'Privzetega uporabnika ni mogoče zakleniti in ga ni mogoče odkleniti';
$lang['PP_Webmaster is not unlockable'] = 'Uporabnikov spletnih skrbnikov ni mogoče zakleniti in jih ni mogoče odkleniti';
$lang['PP_You cannot unlock your account'] = 'Ne morete odkleniti lastnega računa';
$lang['PP_Generic is not unlockable'] = 'Splošnih uporabnikov ni mogoče zakleniti in jih ni mogoče odkleniti';
$lang['PP_Admins is not unlockable'] = 'Skrbniških uporabnikov ni mogoče zakleniti in jih ni mogoče odkleniti';
$lang['PP_User Not Locked'] = 'Uporabnik ni zaklenjen';
$lang['PP_User Locked'] = 'Uporabnik je zaklenjen';
$lang['PP_You need to confirm unlock'] = 'Potrditi morate odklepanje (potrditveno polje)!';
$lang['PP %d user unlocked'] = '%d uporabnik je odklenjen';
$lang['PP %d users unlocked'] = '%d odklenjenih uporabnikov';
$lang['PP_config_tab'] = 'Konfiguracija';
$lang['PP_Users_List_Tab'] = 'Upravljanje';
$lang['PP_Pwd_Actions'] = 'Upravljanje uporabnikov';
$lang['PP_Pwd_Actions_d'] = 'Tukaj so nastavljene zahteve za odklepanje računov in obnovitev gesla.<br/><br/>
Izberite uporabnike, preden nastavite dejanje. Potrditveno polje je obvezno, preden izvedete kakršno koli dejanje.<br/><br/>
<b style=&quot;color: red;&quot;>Pomembno :</b> Dejanja veljajo <u><b>SAMO</b> za račune obiskovalcev</u> in ne za skrbnike, spletne skrbnike, privzete in goste.';
$lang['PP_Err_Userlist_Settings'] = 'Ta zavihek je na voljo samo, če je omogočeno obnavljanje gesla ali odklepanje računov';
$lang['PP_No_Userlist'] = 'Za prikaz ni na voljo nobenih uporabnikov';
$lang['PP_Select page number'] = 'Izberite številko strani za prikaz';
$lang['PP_Select page size'] = 'Izberite velikost strani';
$lang['FCK Editor On/Off'] = 'Vklop/Izklop urejevalnika FCK';
?>