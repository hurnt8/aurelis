<?php

return [
    'success_contact' => 'poruka je uspješno poslana',
    'success_sbscribe' => 'Pretplata je uspješno završena',
    'error' => 'Došlo je do greške prilikom slanja. Pokušajte ponovno kasnije.',
    'success_loan' => 'Vaš zahtjev za kredit je uspješno poslan. Odgovor ćemo Vam dostaviti u najkraćem mogućem roku.',
    'error_loan' => 'Došlo je do pogreške prilikom slanja zahtjeva za kredit. Pokušajte ponovno kasnije.',

    // E-poruke — zahtjev za kredit
    'months'               => 'mjeseci',
    'month_abbr'           => 'mj.',
    'optional'             => 'neobavezno',
    'loan_admin_subject'   => 'Novi zahtjev za kredit',
    'loan_admin_intro'     => 'Klijent je upravo poslao zahtjev za kredit putem stranice ' . site_name() . '.',

    'loan_confirm_subject'   => 'Vaš zahtjev za kredit se obrađuje',
    'loan_confirm_greeting'  => 'Pozdrav :name,',
    'loan_confirm_body'      => 'Zaprimili smo vaš zahtjev za kredit u iznosu od :amount :currency na :duration mjeseci. Trenutno ga obrađuje naš tim.',
    'loan_confirm_footer'    => 'Kontaktirat ćemo vas u najkraćem mogućem roku. Hvala vam na povjerenju.',
    'loan_confirm_signature' => 'Tim ' . site_name(),
    'loan_confirm_noreply'   => 'Ova e-poruka poslana je s adrese na koju se ne odgovara (no-reply). Molimo ne odgovarajte izravno na ovu poruku.',
    'no_reply_notice' => 'Ovo je automatski generirana e-poruka. Molimo ne odgovarajte na nju.',

    'loan_conditions_title'  => 'Uvjeti prihvatljivosti',
    'loan_conditions_text'   => 'Za dobivanje kredita potrebno je imati najmanje 18 godina, stabilan mjesečni prihod i mogućnost otplate prema utvrđenim uvjetima.',
    'loan_complete_btn'      => 'Dovrši moj zahtjev',
    'loan_complete_intro'    => 'Za dovršetak vašeg zahtjeva, kliknite na gumb ispod kako biste nam poslali svoju punu adresu i presliku osobnog dokumenta.',

    'docs_subject'   => 'Dokumenti — Zahtjev za kredit',
    'docs_intro'     => 'Klijent je poslao svoje dokumente za dovršetak zahtjeva za kredit.',
    'docs_name'      => 'Ime',
    'docs_email'     => 'E-pošta',
    'docs_address'   => 'Adresa',
    'docs_country'   => 'Država',
    'docs_tax_number' => 'Porezni broj',
    'docs_activity'  => 'Djelatnost',
    'docs_id_photo'  => 'Osobni dokument',
    'docs_doc_type'  => 'Vrsta dokumenta',
    'docs_recto'     => 'Prednja strana',
    'docs_verso'     => 'Stražnja strana',
    'docs_success'       => 'Vaši dokumenti su poslani. Naš tim će ih pregledati u najkraćem mogućem roku.',
    'docs_already_sent'  => 'Vaši dokumenti su već poslani ili je obrazac istekao. Ako želite ponovno poslati dokumente, osvježite ovu stranicu.',

    'doc_type_id_card'   => 'Osobna iskaznica',
    'doc_type_passport'  => 'Putovnica',
    'doc_type_license'   => 'Vozačka dozvola',
    'doc_type_residence' => 'Dozvola boravka',
    'doc_type_other'     => 'Ostali dokument',

    'docs_confirm_subject'   => 'Vaši dokumenti su zaprimljeni',
    'docs_confirm_greeting'  => 'Pozdrav :name,',
    'docs_confirm_body'      => 'Zaprimili smo vaše dokumente (adresa i osobni dokument). Naš tim će ih pregledati i javiti vam se u roku od 24 sata.',
    'docs_confirm_footer'    => 'Zahvaljujemo na povjerenju i stojimo vam na raspolaganju za sva pitanja.',
    'docs_confirm_signature' => 'Tim ' . site_name(),

    'docs_upload_hint'  => 'Povucite i ispustite ili kliknite za odabir datoteke',
    'docs_single_photo' => 'Za ovu vrstu dokumenta dovoljna je jedna fotografija.',
    'docs_complete_hint' => 'Odaberite vrstu dokumenta i dodajte fotografiju iznad kako biste mogli poslati.',
    // Affiche quand le total televerse depasse post_max_size (voir Exceptions/Handler).
    'upload_too_large' => 'Poslane datoteke su prevelike. Komprimirajte ih ili ih pošaljite jednu po jednu.',

];