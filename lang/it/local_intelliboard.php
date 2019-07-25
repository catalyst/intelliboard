<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin provides access to Moodle data in form of analytics and reports in real time.
 *
 *
 * @package    local_intelliboard
 * @copyright  2017 IntelliBoard, Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @website    http://intelliboard.net/
 */

$string['pluginname'] = 'Plugin di IntelliBoard.net';
$string['tracking_title'] = 'Monitoraggio del tempo';
$string['tracking'] = 'Monitoraggio delle sessioni';
$string['dashboard'] = 'Dashboard';
$string['settings'] = 'Impostazioni';
$string['adv_settings'] = 'Impostazioni avanzate';
$string['intelliboardroot'] = 'IntelliBoard';
$string['report'] = 'Report';
$string['reports'] = 'Report';
$string['learners'] = 'Studenti';
$string['courses'] = 'Corsi';
$string['load'] = 'Prestazioni';
$string['inactivity'] = 'Inattività';
$string['inactivity_desc'] = "Tempo di inattività dell'utente (in secondi)";
$string['ajax'] = 'Frequenza';
$string['ajax_desc'] = 'Frequenza di salvataggio della sessione tramite AJAX. 0 - AJAX disabilitato (in secondi)';
$string['enabled'] = 'Monitoraggio abilitato';
$string['enabled_desc'] = 'Abilita il monitoraggio';
$string['trackadmin'] = 'Monitoraggio Amministratori';
$string['logs'] = 'Strumento di migrazione';
$string['trackadmin_desc'] = 'Abilita il monitoraggio per gli utenti admin (non consigliato)';
$string['intelliboard:instructors'] = 'IntelliBoard [Docente]';
$string['intelliboard:students'] = 'IntelliBoard [Studente]';
$string['intelliboard:view'] = 'IntelliBoard [Vista]';
$string['intelliboard:manage'] = 'IntelliBoard [Gestione]';
$string['intelliboard:competency'] = 'IntelliBoard [Competenza]';
$string['tls12'] = 'TLS v1.2';
$string['tls12_desc'] = 'Impostazioni avanzate: TLS v1.2';
$string['sso'] = 'Collegamento SSO';
$string['sso_desc'] = 'Collegamento SSO a IntelliBoard.net';
$string['ssomenu'] = 'Elemento menu SSO';
$string['ssomenu_desc'] = 'Link SSO nel menu di navigazione (per non-studenti/non-docenti)';
$string['api'] = 'API alternativa';
$string['api_desc'] = 'Utilizzare un server API alternativo (per evitare il blocco da parte del firewall)';
$string['server'] = 'Server di IntelliBoard';
$string['server_usa'] = 'IntelliBoard USA';
$string['server_au'] = 'IntelliBoard Australia';
$string['server_eu'] = 'IntelliBoard Europa';
$string['show_dashboard_tab'] = 'Pagina Dashboard';
$string['filters'] = 'Dashboard filtri';
$string['filter1'] = 'Utenti eliminati';
$string['filter2'] = 'Utenti sospesi';
$string['filter3'] = 'Utente ospite';
$string['filter4'] = 'Filtro del corso';
$string['filter5'] = 'Filtro per Metodo di iscrizione';
$string['filter6'] = 'Filtro per Iscrizione Utenti';
$string['filter7'] = 'Filtro attività/risorse';
$string['filter8'] = 'Filtro per Utenti iscritti';
$string['filter1_desc'] = 'Mostra utenti cancellati';
$string['filter2_desc'] = 'Mostra utenti sospesi';
$string['filter3_desc'] = 'Mostra utente [ospite] nei report';
$string['filter4_desc'] = 'Mostra corsi non visibili';
$string['filter5_desc'] = 'Mostra metodi di iscrizione non attivi';
$string['filter6_desc'] = 'Mostra utenti con Stato di Iscrizione non attivo';
$string['filter7_desc'] = 'Mostra Attività/Risorse non visibili';
$string['filter8_desc'] = 'Mostra solo gli utenti iscritti (non consigliato)';
$string['intelliboardaccess'] = 'Non hai il permesso di visualizzare questa pagina. Si prega di contattare il proprio Amministratore per assistenza.';
$string['tex1'] = 'La Dashboard dello Studente IntelliBoard non è abilitata.';
$string['account'] = 'Informazioni sugli abbonamenti';
$string['te12'] = 'Nome';
$string['te13'] = 'Cognome';
$string['te1'] = 'Email';
$string['te1_desc'] = 'Inserisci l\'e-mail utilizzata per la sottoscrizione dell\'abbonamento IntelliBoard.net. Se non si dispone di un abbonamento attivo, si prega di registrarsi a <a target="_blank" href="https://intelliboard.net">IntelliBoard.net</a>IntelliBoard.net</a>. La Dashboard dello Studente e dell\'Istruttore sono disponibili con un abbonamento di Livello 4 o superiore.';
$string['n1'] = 'Panoramica [Progresso dello Studente]';
$string['n2'] = 'Panoramica [Progresso della Valutazione]';
$string['n3'] = 'Panoramica [Progresso dell\'Attività]';
$string['n12'] = 'Panoramica [Panoramica Corso]';
$string['n4'] = 'Panoramica [Totali]';
$string['n5'] = 'Progressi attuali';
$string['n13'] = 'Totale Studenti';
$string['n6'] = 'Widget: Correlazioni';
$string['n14'] = 'Widget: Coinvolgimento degli Studenti';
$string['n18'] = 'Widget: Progressione della Valutazione Studenti';
$string['n7'] = 'Widget: Utilizzo degli Eventi';
$string['n15'] = 'Widget: Utilizzo delle Attività';
$string['n16'] = "Widget: Utilizzo dell'Argomento";
$string['n8'] = 'Pagina Corsi';
$string['n9'] = 'Pagina Report';
$string['n10'] = 'Dashboard del Docente';
$string['n101'] = 'Abilita la Dashboard del Docente';
$string['n11'] = 'Testo alternativo per il menu di navigazione';
$string['ts1'] = 'Dashboard dello Studente';
$string['ts2'] = 'Pagina della Dashboard dello Studente';
$string['ts3'] = 'Corsi della Dashboard dello Studente';
$string['ts4'] = 'Valutazioni della Dashboard dello Studente';
$string['ts5'] = 'Report della Dashboard dello Studente';
$string['learner_tf_last_week'] = 'Time filter: Last Week';
$string['t01'] = 'Filtro temporale: Ultimo mese';
$string['t02'] = 'Filtro temporale: Ultimo trimestre';
$string['t03'] = 'Filtro temporale: Ultimo semestre';
$string['t04'] = 'Abilita [intestazione] i Corsi completati';
$string['t05'] = 'Abilita [intestazione] i Corsi in svolgimento';
$string['t06'] = 'Abilita [intestazione] la Valutazione media dei corsi';
$string['t07'] = 'Abilita [intestazione] i Messaggi';
$string['t08'] = 'Abilita [intestazione] la Somma delle Valutazioni corsi';
$string['t09'] = 'Il Docente può vedere i propri Studenti';
$string['t1'] = 'Abilita la Dashboard dello Studente';
$string['t2'] = 'Abilita la Dashboard';
$string['t3'] = 'Abilita i Corsi';
$string['t4'] = 'Abilita le Valutazioni';
$string['t48'] = 'Abilita i Report';
$string['t5'] = 'Abilita grafico [Progresso dell\'Attività]';
$string['t53'] = 'Abilita la linea media sul grafico in [Progresso dell\'Attività]';
$string['t6'] = 'Abilita grafico [Progresso del Corso]';
$string['t7'] = 'Abilita [la media dei miei Corsi]';
$string['t8'] = 'Abilita [media generale dei Corsi]';
$string['t9'] = 'Abilita widget [Compiti]';
$string['t10'] = 'Abilita widget [Quiz]';
$string['t11'] = 'Abilita widget [Progressi del corso]';
$string['t12'] = 'Abilita widget [Partecipazione attività]';
$string['t13'] = 'Abilita widget [Apprendimento]';
$string['t14'] = 'Abilita widget [Successo del corso]';
$string['t15'] = 'Abilita widget [Correlazioni]';
$string['t16'] = 'Abilita il Docente del corso';
$string['t17'] = 'Abilita la Categoria del corso';
$string['t18'] = 'Abilita il Completamento del corso';
$string['t19'] = 'Abilita la Valutazione del corso';
$string['t20'] = 'Abilita la media delle classi del corso';
$string['t21'] = 'Abilita il Tempo Impiegato nel corso';
$string['t22'] = 'Abilita la Data di inizio corso';
$string['t23'] = 'Abilita colonna [Data di inizio del corso]';
$string['t24'] = 'Abilita colonna [Data di iscrizione]';
$string['t25'] = 'Abilita colonna [Progresso]';
$string['t26'] = 'Abilita colonna [Lettera]';
$string['t27'] = 'Abilita colonna [Attività completate]';
$string['t28'] = 'Abilita colonna [Valutazione]';
$string['t29'] = 'Abilita colonna [Stato di completamento del corso]';
$string['t30'] = 'Abilita la colonna [Valutazioni attività]';
$string['t31'] = 'Abilita colonna widget [Compiti][Valutazione]';
$string['t32'] = 'Abilita colonna widget [Compiti][Scadenza]';
$string['t33'] = 'Abilita la colonna del widget [Quiz][Valutazione]';
$string['t34'] = 'Abilita la colonna del widget [Quiz][Scadenza]';
$string['t35'] = 'Abilita colonna widget [Progressi del corso][Progressi]';
$string['t36'] = 'Abilita colonna widget [Progressi del corso][Valutazione]';
$string['t37'] = 'Abilita colonna widget [Progressi del corso][Iscritti]';
$string['t38'] = 'Abilita colonna widget [Progressi del corso][Completati]';
$string['t52'] = 'Abilita righe widget [Progressi del corso][Categoria]';
$string['t39'] = 'Abilita opzione [Progressi][Punteggio obiettivo]';
$string['t40'] = 'Abilita opzione [Progressi][Media delle classi]';
$string['t41'] = 'Abilita [Intestazione valutazioni attività] Completato il';
$string['t42'] = 'Abilita [Intestazione valutazioni attività] Ultimo accesso al corso';
$string['t43'] = 'Abilita colonna tipo [Intestazione valutazioni]';
$string['t44'] = 'Abilita colonna valutazione [Valutazioni attività]';
$string['t45'] = 'Abilita colonna valutati [Valutazioni attività]';
$string['t46'] = 'Abilita colonna completati [Valutazioni attività]';
$string['t47'] = 'Colore di sfondo dei Corsi [grid]';
$string['t49'] = 'Colonne del filtro report';
$string['t50'] = 'Ruoli del Docente';
$string['t51'] = 'Ruoli degli Studenti';
$string['current_grade'] = 'valutazione corrente';
$string['average_grade'] = 'valutazione media';
$string['type_here'] = 'Digita qui...';
$string['enrolled_date'] = 'Data di iscrizione';
$string['teacher'] = 'Docente';
$string['category'] = 'Categoria';
$string['current_grade'] = 'Valutazione corrente';
$string['completion'] = 'Completamento';
$string['class_average'] = 'Media delle classi';
$string['time_spent'] = 'Tempo impiegato';
$string['completed_on'] = 'Completato il {$a}';
$string['passed_on'] = 'Completato (superato) su {$a}';
$string['failed_on'] = 'Completato (non superato) su {$a}';
$string['last_access_on_course'] = 'Ultimo accesso al Corso: {$a}';
$string['you_have_certificates'] = 'Hai {$a} certificati';
$string['close'] = 'Chiudere';
$string['view_course_details'] = 'Visualizza i dettagli del corso';
$string['incomplete'] = 'Incompleto';
$string['return_to_grades'] = 'Ritorna alle Valutazioni';
$string['grade'] = 'Valutazione';
$string['last_week'] = 'Ultima settimana';
$string['last_month'] = 'Ultimo mese';
$string['last_quarter'] = 'Ultimo trimestre';
$string['last_semester'] = 'Ultimo semestre';
$string['activity_progress'] = 'Progressi attività';
$string['course_progress'] = 'Progressi del corso';
$string['my_course_average_all'] = 'la media dei miei Corsi (tutti i corsi)';
$string['overall_course_average'] = 'media generale dei Corsi (tutti gli studenti; tutti i corsi)';
$string['assignments'] = 'Compiti';
$string['quizzes'] = 'Quiz';
$string['assignment_name'] = 'Nome del compito';
$string['due_date'] = 'Data di scadenza';
$string['no_data'] = 'Nessun dato';
$string['quiz_name'] = 'Nome del Quiz';
$string['all_courses'] = 'Tutti i corsi';
$string['time_period_due'] = 'Periodo di tempo (scadenza)';
$string['all_data'] = 'Tutti i dati';
$string['progress'] = 'Progresso';
$string['enrolled'] = 'Iscritti';
$string['completed'] = 'Completato';
$string['activity_participation'] = 'Partecipazione attività';
$string['learning'] = 'Apprendimento';
$string['course_success'] = 'Successo del corso';
$string['correlations'] = 'Correlazioni';
$string['course_start_date'] = 'Data di inizio del corso';
$string['letter'] = 'Lettera';
$string['completed_activities'] = 'Attività completate';
$string['score'] = 'Valutazione';
$string['course_completion_status'] = 'Stato di completamento del corso';
$string['activity_grades'] = 'Valutazioni attività';
$string['completion_is_not_enabled'] = 'Il Completamento non è abilitato per questo corso';
$string['activities'] = 'Attività';
$string['activity_name'] = 'Nome attività';
$string['type'] = 'Tipo';
$string['graded'] = 'Valutato';
$string['passed'] = 'Superato';
$string['failed'] = 'Non superato';
$string['completed_courses'] = 'Corsi completati';
$string['courses_in_progress'] = 'Corsi in corso';
$string['courses_avg_grade'] = 'Valutazione media dei Corsi';
$string['courses_sum_grade'] = 'Somma della valutazione del corso per la scala di valutazione';
$string['grades'] = 'Valutazioni';
$string['messages'] = 'Messaggi';
$string['x_completions'] = '{$a} Completamenti';
$string['completion_status'] = 'Stato di completamento';
$string['users_activity'] = 'Attività degli utenti';
$string['daily'] = 'Giornaliero';
$string['weekly'] = 'Settimanale';
$string['monthly'] = 'Mensile';
$string['number_of_sessions'] = 'Numero di sessioni';
$string['number_today'] = '{$a} oggi';
$string['number_this_week'] = '{$a} questa settimana';
$string['course_completions'] = 'Completamenti del corso';
$string['user_enrolments'] = 'Iscrizioni Utente';
$string['users'] = 'Utenti';
$string['modules'] = 'Moduli';
$string['categories'] = 'Categorie';
$string['total'] = 'Totale';
$string['users_overview'] = 'Panoramica degli Utenti';
$string['enable_time_and_visits_users_overview'] = 'Abilita il Tempo Impiegato e le Visite in Panoramica Utenti';
$string['disable_time_and_visits_users_overview'] = 'Disabilita il Tempo Impiegato e le Visite in Panoramica utenti';
$string['loading'] = 'Caricamento...';
$string['loading2'] = 'Caricamento, si prega di attendere...';
$string['enrollments'] = 'Iscrizioni';
$string['registrations'] = 'Registrazioni';
$string['participation'] = 'Partecipazione';
$string['time'] = 'Tempo';
$string['enrolment_method'] = 'Metodo di iscrizione';
$string['intelliBoard_migration_tool'] = 'Strumento di migrazione IntelliBoard';
$string['importing_totals'] = 'Importazione dei totali';
$string['total_numbers'] = 'Data: {$a->timepoint}, Sessioni: {$a->sessions}, Visite: {$a->visits},  Tempo impiegato: {$a->timespend}';
$string['total_numbers2'] = 'UTENTE: {$a->userid}, Pagina: {$a->page}, Param:{$a->param}, Visite: {$a->visits}, Tempo speso: {$a->timespend}';
$string['total_numbers3'] = '----Data: {$a->timecreated}, Track ID: {$a->trackid}, Visite: {$a->visite}, Tempo impiegato: {$a->timespend}';
$string['logs_to_process'] = 'Log da elaborare {$a}';
$string['please_wait_or_cancel'] = 'Si prega di attendere per continuare o <a href="{$a}">Annulla</a>';
$string['done'] = 'Fatto!';
$string['return_to_home'] = 'Ritorna a Home';
$string['importing_logs'] = 'Importazione dei log';
$string['intelliBoard_migration_tool_info'] = "Lo strumento di migrazione di IntelliBoard serve per migrare i dati storici dalla tabella dei log di Moodle verso un nuovo formato. Si prega di notare che la procedura di archiviazione dei log di Moodle logs non cambierà. Una volta che i dati storici sono stati migrati nel nuovo formato, i valori storici come \'Time Spent\' e \'Visits\' saranno disponibili per l'anteprima su IntelliBoard.net.";
$string['moodle_logs'] = 'Log di Moodle';
$string['intelliboard_tracking'] = 'Monitoraggio IntelliBoard';
$string['intelliboard_logs'] = 'Log di IntelliBoard';
$string['intelliboard_totals'] = 'Totali IntelliBoard';
$string['intelliboard_start_tracking'] = 'Avvia monitoraggio di IntelliBoard';
$string['total_values_include'] = 'I valori totali includono sessioni uniche, corsi, visite, tempo impiegato.';
$string['items_per_query'] = 'Oggetti per-query';
$string['import'] = 'Importazione';
$string['log_values_include'] = 'I valori di log includono i log giornalieri di ciascun utente.';
$string['powered_by'] = 'Powered by <a href="https://intelliboard.net/">IntelliBoard.net</a>';
$string['intelliboardnet'] = 'IntelliBoard.net';
$string['visits'] = 'Visite';
$string['registered'] = 'Registrato';
$string['disabled'] = 'Disabilitato';
$string['enrolled_completed'] = 'Iscritti: {$a->courses}, Completati: {$a->completed_courses}';
$string['enrolled_users_completed'] = 'Utenti iscritti: {$a->users}, Completati: {$a->completed}';
$string['user_grade_avg'] = '{$a->user} Valutazione: {$a->grade}, Valutazione media: {$a->avg_grade_site})';
$string['user_visit_avg'] = '{$a->user} Visite: {$a->visits}, Visite medie: {$a->avg_visits_site}';
$string['user_time_avg'] = '{$a->user} Tempo: {$a->timespend}, Tempo medio: {$a->avg_timespend_site}';
$string['more_users'] = 'Più utenti';
$string['more_courses'] = 'Altri corsi';
$string['showing_1_to_10'] = 'Mostra da 1 a 10';
$string['course_grade'] = 'Valutazione del corso';
$string['completed_activities_resourses'] = 'Attività/Risorse completate';
$string['save'] = 'Salva';
$string['help'] = 'Hai bisogno di aiuto?';
$string['in1'] = 'Panoramica';
$string['in2'] = 'Progressi attuali';
$string['in3'] = 'Totale Corsi';
$string['in4'] = 'Totale Studenti';
$string['in5'] = 'Valutazioni totali del Corso';
$string['in6'] = 'Completamento di Studenti';
$string['in7'] = 'Studenti non completati';
$string['in8'] = 'Valutazione media dello Studente';
$string['in9'] = 'Correlazioni';
$string['in10'] = 'Utilizzo degli eventi';
$string['in11'] = 'Progresso dello Studente';
$string['in12'] = 'Progresso della valutazione';
$string['in13'] = 'Tempo impiegato (%)';
$string['in14'] = '% Progressi';
$string['in15'] = 'Completamenti dello Studente';
$string['in16'] = 'Ultimo accesso';
$string['in17'] = 'Tempo totale impiegato';
$string['in18'] = 'Totale Visite';
$string['in19'] = 'Valutazione media';
$string['in20'] = 'Ritorna agli Studenti';
$string['in201'] = 'Ritorna alle Attività';
$string['in21'] = 'Valutazione media del Corso';
$string['in22'] = 'Abilitato';
$string['in23'] = 'Non hai Studenti da mostrare.';
$string['in24'] = 'Modulo';
$string['in25'] = 'Valutazione soglia';
$string['in26'] = 'Coinvolgimento dello Studente';
$string['in34'] = 'Progressione delle Valutazioni degli Studenti';
$string['in27'] = 'Totale Studenti';
$string['in28'] = 'Tempo medio impiegato';
$string['in29'] = 'Studenti attivi';
$string['in30'] = 'Studenti non attivi';
$string['in31'] = 'Utilizzo attività';
$string['in32'] = 'Tempo medio nel periodo selezionato';
$string['in33'] = "Utilizzo dell'Argomento";
$string['status'] = 'Stato';
$string['course_category'] = 'Categoria del corso';
$string['course_started'] = 'Corso Iniziato';
$string['total_time_spent_enrolled_learners'] = 'Tempo totale impiegato dagli Studenti iscritti al Corso';
$string['total_visits_enrolled_learners'] = 'Visite totali degli Studenti iscritti al Corso';
$string['learners_enrolled'] = 'Iscrizioni di Studenti';
$string['learners_enrolled_period'] = 'Studenti iscritti nel il periodo selezionato';
$string['learning_progress'] = "Progressi nell'apprendimento";
$string['sections'] = 'Sezioni';
$string['section'] = 'Sezione';
$string['total_activities_resources'] = 'Totale Attività/Risorse';
$string['completions'] = 'Completamenti';
$string['return_to_courses'] = 'Ritorna ai Corsi';
$string['click_link_below_support_pages'] = 'Fare clic sul link sottostante per accedere alle pagine di supporto IntelliBoard:';
$string['support'] = 'Supporto';
$string['course_name'] = 'Nome del corso';
$string['enrolled_completed_learners'] = 'Iscrizioni/Completamenti di Studenti';
$string['activities_resources'] = 'Attività/Risorse';
$string['actions'] = 'Azioni';
$string['learner_name'] = 'Nome dello Studente';
$string['completed_activities_resources'] = 'Attività/Risorse completate';
$string['filter_dates'] = 'Filtro per date:';
$string['select_date'] = 'Seleziona data';
$string['select'] = 'Seleziona';
$string['selectall'] = 'Seleziona tutti';
$string['ok'] = 'OK';
$string['moodle'] = 'Moodle';
$string['totara'] = 'Totara';
$string['monitors'] = 'Monitor';
$string['cohorts'] = 'Gruppi globali';
$string['course_overview'] = 'Panoramica del corso';
$string['topics'] = 'Argomenti';


$string['a31'] = 'Quadri';
$string['a32'] = 'Piani di apprendimento';
$string['a33'] = 'Valutato, Competente';
$string['a34'] = 'Valutato, Non competente';
$string['a35'] = 'Non valutato';
$string['a36'] = 'Panoramica delle competenze';
$string['a37'] = "Non è stata creata una competenza. Contattare l'amministratore di sistema.";
$string['a38'] = 'Corsi collegati alle competenze';
$string['a39'] = 'Totale delle competenze';
$string['a40'] = 'Corsi collegati';
$string['no_competency'] = 'Sembra che le Competenze non siano abilitate sul tuo sito Moodle.';

$string['scalesettings'] = 'Impostazioni della scala';
$string['scales'] = 'Abilita la Scala personalizzata';
$string['scale_raw'] = 'Disabilita la scala';
$string['scale_real'] = 'Mostra la valutazione reale invece che percentuale';
$string['scale_total'] = 'Valutazione totale';
$string['scale_value'] = 'Valore';
$string['scale_percentage'] = 'Percentuale';

$string['a0'] = 'Dashboard delle Competenze';
$string['a1'] = 'Competenze';
$string['a2'] = 'Competenza';
$string['a3'] = 'Attività assegnate';
$string['a4'] = 'Progressi di Competenza';
$string['a5'] = 'Competenze valutate';
$string['a6'] = '# Evidenze';
$string['a7'] = 'Studenti valutati';
$string['a8'] = 'Progresso';
$string['a9'] = 'Studenti competenti';
$string['a10'] = 'Studenti iscritti';
$string['a11'] = 'Elenco delle competenze assegnate al corso';
$string['a12'] = 'Stato dello Studente';
$string['a13'] = 'Nome della competenza';
$string['a14'] = 'Creato il';
$string['a15'] = 'Assegnato su';
$string['a16'] = 'Livello di competenza indicato';
$string['a17'] = 'Valutazione';
$string['a18'] = 'Competenze Acquisite';
$string['a19'] = 'Data valutazione competenza';
$string['a20'] = 'Grado di competenza';
$string['a21'] = 'Attività assegnate';
$string['a22'] = 'Competenza raggiunta';
$string['a23'] = 'Competenze Valutate';
$string['a24'] = '# Evidenze';
$string['a25'] = 'Studenti completati';
$string['a27'] = 'oltre';
$string['a28'] = 'Dettagli';
$string['a29'] = 'Abilita il Dashboard delle Competenze';
$string['a30'] = 'Abilita i Report di Competenza';
$string['a26'] = 'Questa tabella mostra il numero di competenze assegnate ad un corso, gli studenti che sono stati valutati (abili o meno), e gli studenti che sono stati designati come abili nella competenza.';
$string['s25'] = "Tempo impiegato sull'Attività";
$string['s45'] = 'Attività';
$string['s46'] = 'Percentuale di Studenti che hanno effettuato un tentativo';
$string['s47'] = 'Argomento';
$string['s48'] = "Tempo impiegato sull'Argomento";

$string['completions'] = "Stato di completamento dell'attività";
$string['completions_completed'] = 'Stato di completamento (completato)';
$string['completions_pass'] = 'Stato di completamento (superato)';
$string['completions_fail'] = 'Stato di completamento (non superato)';
$string['completions_desc'] = "1) L'utente ha completato questa attività. Non è specificato se l'attività è stata superata o meno. <br>
2) L'utente ha completato questa attività con una valautazione superiore al minimo richiesto. <br>
3) L'utente ha completato questa attività, ma la sua valutazione è inferiore al punteggio minimo richiesto.";

$string['widget_name27'] = 'Iscrizioni cumulative';
$string['widget_name28'] = 'Coinvolgimento';
$string['widget_name29'] = 'Login unici';
$string['widget_name30'] = 'Iscrizioni per Corso';
$string['widget_name31'] = 'Registri e utilizzo del supervisore';
$string['role1'] = 'Primo ruolo';
$string['role2'] = 'Secondo ruolo';

$string['select_course'] = 'Selezionare il corso';
$string['select_quiz'] = 'Seleziona quiz';
$string['not_quiz'] = 'Ops, sembra che non ci siano Quiz creati per il Corso selezionato.';
$string['enter_course_and_quiz'] = 'Selezionare il proprio corso e il quiz.';
$string['enter_quiz'] = 'Selezionare il proprio quiz.';
$string['analityc_3_name'] = 'Panoramica e dettagli domanda del Quiz';
$string['course_name_a'] = 'Corso: {$a}';
$string['quiz_name_a'] = 'Quiz: {$a}';
$string['cor_incor_answers'] = 'Risposte corrette/non corrette';
$string['quiz_finished'] = 'Quiz terminato';
$string['quiz_grades'] = 'Valutazioni del Quiz';
$string['correct_number'] = 'Corretto {$a}';
$string['incorrect_number'] = 'Errato {$a}';
$string['correct'] = 'Corretto';
$string['incorrect'] = 'Errato';
$string['weekday_0'] = 'Lunedì';
$string['weekday_1'] = 'Martedì';
$string['weekday_2'] = 'Mercoledì';
$string['weekday_3'] = 'Giovedì';
$string['weekday_4'] = 'Venerdì';
$string['weekday_5'] = 'Sabato';
$string['weekday_6'] = 'Domenica';
$string['time_1'] = 'Mattina';
$string['time_2'] = 'Pomeriggio';
$string['time_3'] = 'Sera';
$string['time_4'] = 'Fuori orario';
$string['passing_score_for'] = 'Valutazione soglia per {$a}';
$string['name'] = 'Nome';
$string['answers'] = 'Risposte';
$string['ques_breakdown'] = 'Ripartizione delle domande';
$string['n17'] = 'Pagina analytics';
$string['analytics'] = 'Analytics';
$string['pdf'] = 'PDF';
$string['csv'] = 'CSV';
$string['excel'] = 'Excel';

$string['grades_alt_text'] = 'Testo alternativo per il menu di navigazione';
$string['course_chart'] = 'Abilita il Grafico del corso';
$string['course_activities'] = 'Abilita le Attività del corso';
$string['filter_this_year'] = "Filtro temporale: Quest'anno";
$string['filter_last_year'] = 'Filtro temporale: Ultimo anno';
$string['this_year'] = "Quest'anno";
$string['last_year'] = "L'anno scorso";

$string['reportselect'] = 'Si prega di selezionare almeno un Report da App.IntelliBoard.net.  Fare clic su un Report, quindi "Personalizza Report", "Modifica" e infine selezionare le voci desiderate sotto "Visibile nel LMS".';
$string['monitorselect'] = 'Si prega di selezionare almeno un Monitor da App.IntelliBoard.net.  Fare clic su un Monitor, quindi "Personalizza il Monitor Set" e infine selezionare le voci desiderate sotto "Visibile nel LMS".';
$string['select_user'] = 'Seleziona utente';
$string['course_max_grade'] = 'Valutazione massima del corso';

$string['no_data_notification'] = 'Non ci sono nuovi dati per [date].';
$string['last_hour'] = 'ora';
$string['last_day'] = 'giorno';




$string['privacy:metadata:local_intelliboard_assign'] = 'Tabella Assigns-SubAccount Intelliboard';
$string['privacy:metadata:local_intelliboard_details'] = 'Tabella alt/logs/by-hour Intelliboard';
$string['privacy:metadata:local_intelliboard_logs'] = 'Tabella alt/logs/by-day Intelliboard';
$string['privacy:metadata:local_intelliboard_totals'] = 'Tabella alt/logs/totals Intelliboard';
$string['privacy:metadata:local_intelliboard_tracking'] = 'Tabella alt/logs/all-time Intelliboard';
$string['privacy:metadata:local_intelliboard_reports'] = 'Tabella dei Report SQL personalizzati Intelliboard';
$string['privacy:metadata:local_intelliboard_ntf'] = 'Tabella principale delle notifiche di Intelliboard';
$string['privacy:metadata:local_intelliboard_ntf_hst'] = 'Tabella della cronologia notifiche di Intelliboard';
$string['privacy:metadata:local_intelliboard_ntf_pms'] = 'Tabella dei parametri dinamici delle notifiche di Intelliboard';

$string['privacy:metadata:local_intelliboard_assign:userid'] = 'ID Utente del record';
$string['privacy:metadata:local_intelliboard_assign:rel'] = 'Tipo di Rel del record';
$string['privacy:metadata:local_intelliboard_assign:type'] = 'Tipo di istanza Moodle';
$string['privacy:metadata:local_intelliboard_assign:instance'] = 'ID Moodle collegato';
$string['privacy:metadata:local_intelliboard_assign:timecreated'] = 'Marca temportale dei record';

$string['privacy:metadata:local_intelliboard_reports:status'] = 'Stato del Report - attivato / non attivato';
$string['privacy:metadata:local_intelliboard_reports:name'] = 'Nome del Report personalizzato';
$string['privacy:metadata:local_intelliboard_reports:sqlcode'] = 'Codice SQL codificato in BASE64';
$string['privacy:metadata:local_intelliboard_reports:timecreated'] = 'Data creazione';

$string['privacy:metadata:local_intelliboard_details:logid'] = 'ID Tabella [local_intelliboard_logs].';
$string['privacy:metadata:local_intelliboard_details:visits'] = 'Il numero di visite, clic del mouse, al giorno';
$string['privacy:metadata:local_intelliboard_details:timespend'] = "La quantità di Tempo impiegato all'Ora";
$string['privacy:metadata:local_intelliboard_details:timepoint'] = "L'ora";

$string['privacy:metadata:local_intelliboard_logs:trackid'] = "L'ID della Tabella [local_intelliboard_tracking].";
$string['privacy:metadata:local_intelliboard_logs:visits'] = 'Visite, clic del mouse, al giorno';
$string['privacy:metadata:local_intelliboard_logs:timespend'] = 'Tempo impiegato, al giorno';
$string['privacy:metadata:local_intelliboard_logs:timepoint'] = "Data e ora del giorno nell'anno";

$string['privacy:metadata:local_intelliboard_totals:sessions'] = 'Numero totale di Sessioni utente in Moodle';
$string['privacy:metadata:local_intelliboard_totals:courses'] = 'Totale Corsi in Moodle';
$string['privacy:metadata:local_intelliboard_totals:visits'] = 'Visite totali di tutti gli Utenti in Moodle';
$string['privacy:metadata:local_intelliboard_totals:timespend'] = 'Tempo totale impiegato dagli Utenti in Moodle';
$string['privacy:metadata:local_intelliboard_totals:timepoint'] = "Data e ora del giorno nell'anno";

$string['privacy:metadata:local_intelliboard_tracking:userid'] = 'ID Utente che visita la Pagina Moodle.';
$string['privacy:metadata:local_intelliboard_tracking:courseid'] = "ID del Corso visitato dell'Utente";
$string['privacy:metadata:local_intelliboard_tracking:page'] = 'Tipo di Pagina [course,module,profile,site]';
$string['privacy:metadata:local_intelliboard_tracking:param'] = 'Tipo di ID Pagina';
$string['privacy:metadata:local_intelliboard_tracking:visits'] = 'Visite degli utenti su una Pagina';
$string['privacy:metadata:local_intelliboard_tracking:timespend'] = 'Tempo impiegato dagli utenti su una Pagina';
$string['privacy:metadata:local_intelliboard_tracking:firstaccess'] = 'Primo Accesso degli utenti';
$string['privacy:metadata:local_intelliboard_tracking:lastaccess'] = 'Ultimo Accesso degli utenti';
$string['privacy:metadata:local_intelliboard_tracking:useragent'] = 'Tipo di Browser degli utenti';
$string['privacy:metadata:local_intelliboard_tracking:useros'] = 'Sistema operativo degli utenti';
$string['privacy:metadata:local_intelliboard_tracking:userlang'] = 'Lingua del browser degli utenti';
$string['privacy:metadata:local_intelliboard_tracking:userip'] = 'Ultimo Indirizzo IP degli utenti';

$string['privacy:metadata:local_intelliboard_ntf:id'] = 'ID notifica';
$string['privacy:metadata:local_intelliboard_ntf:type'] = 'Tipo di notifica';
$string['privacy:metadata:local_intelliboard_ntf:externalid'] = 'Notifica ExternalNID';
$string['privacy:metadata:local_intelliboard_ntf:userid'] = 'Notifica ExternalAppID';
$string['privacy:metadata:local_intelliboard_ntf:email'] = 'Email di notifica';
$string['privacy:metadata:local_intelliboard_ntf:cc'] = 'CC della notifica';
$string['privacy:metadata:local_intelliboard_ntf:subject'] = 'Soggetto della notifica';
$string['privacy:metadata:local_intelliboard_ntf:message'] = 'Messaggio di notifica';
$string['privacy:metadata:local_intelliboard_ntf:state'] = 'Stato della notifica';
$string['privacy:metadata:local_intelliboard_ntf:attachment'] = 'Allegato alla notifica';
$string['privacy:metadata:local_intelliboard_ntf:tags'] = 'Tag di notifica';

$string['privacy:metadata:local_intelliboard_ntf_hst:id'] = 'ID dell cronologia notifiche';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationid'] = 'ID notifica';
$string['privacy:metadata:local_intelliboard_ntf_hst:userid'] = 'Notifica ExternalAppID';
$string['privacy:metadata:local_intelliboard_ntf_hst:notificationname'] = 'Nome della notifica';
$string['privacy:metadata:local_intelliboard_ntf_hst:email'] = 'Cronologia delle notifiche via e-mail';
$string['privacy:metadata:local_intelliboard_ntf_hst:timesent'] = 'Marca temporale della cronologia notifiche';

$string['select_manager_role'] = 'Selezionare il ruolo del manager';
$string['group_aggregation'] = 'Aggregazione di gruppo';
$string['ssodomain'] = 'Sottodominio SSO';
$string['ssodomain_desc'] = 'Single Sign On con Server/Account separato';
$string['instructor_redirect'] = 'Reindirizzamento del Docente';
$string['student_redirect'] = 'Reindirizzamento degli Studenti';
$string['myorders'] = 'Ordini';
$string['myseats'] = 'Posti';
$string['mywaitlist'] = "Lista d'attesa";
$string['mysubscriptions'] = 'Abbonamenti in sottoscrizione';
$string['seatscode'] = 'Codice dei posti';
$string['numberofseats'] = 'Numero di posti';
$string['downloadinvoice'] = 'Scarica fattura';
$string['product'] = 'Prodotto';
$string['key'] = 'Key';
$string['created'] = 'Creato';
$string['seatnumber'] = 'Numero di posti';
$string['seatsused'] = 'Posti utilizzati';
$string['details'] = 'Dettagli';
$string['username'] = 'Nome utente';
$string['used'] = 'Usato';
$string['status'] = 'Stato';
$string['subscriptiondate'] = "Data di sottoscrizione dell'abbonamento";
$string['price'] = 'Prezzo';
$string['recurringperiod'] = 'Periodo ricorrente';
$string['billingcycles'] = 'Cicli di fatturazione';
$string['active'] = 'Attivo';
$string['suspended'] = 'Sospeso';
$string['canceled'] = 'Annullato';
$string['expired'] = 'Scaduto';
$string['process'] = 'Processo';
$string['cancel_subscription'] = 'Annulla abbonamento';



$string['sqlreport'] = 'Report SQL';
$string['sqlreportcreate'] = 'Crea report';
$string['sqlreports'] = 'Report SQL';
$string['sqlreportname'] = 'Nome del Report';
$string['sqlreportcode'] = 'SQL';
$string['sqlreportdate'] = 'Creato il';
$string['sqlreportactive'] = 'Attivato';
$string['sqlreportinactive'] = 'Disattivato';

$string['remove_message'] = 'Il Report SQL è stato eliminato';
$string['delete_message'] = 'Eliminare il Report SQL?';
$string['success_message'] = 'Il Report SQL è stato salvato';
$string['scale_percentage_round'] = 'Percentuale arrotondata';


// BigBlueButton meetings
$string['bbbapiendpoint'] = 'BBB API endpoint';
$string['bbbserversecret'] = 'BBB server secret';
$string['check_active_meetings'] = 'Controlla i Meeting attivi';
$string['bbbmeetings'] = 'BigBlueButton meetings';
$string['enablebbbmeetings'] = 'Abilita il monitoraggio dei Meeting di BigBlueButton';
$string['enablebbbdebug'] = 'Modalità debug BigBlueButton';

$string['privacy:metadata:local_intelliboard_bbb_meet'] = 'Log dei Meeting di BigBlueButton';
$string['privacy:metadata:local_intelliboard_bbb_meet:id'] = 'ID del log del Meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:meetingname'] = 'Nome del Meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:meetingid'] = 'ID Meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:internalmeetingid'] = 'ID interno del Meeting (nel server BBB)';
$string['privacy:metadata:local_intelliboard_bbb_meet:createtime'] = 'Crea tempo (timestamp)';
$string['privacy:metadata:local_intelliboard_bbb_meet:createdate'] = 'Crea data (stringa)';
$string['privacy:metadata:local_intelliboard_bbb_meet:voicebridge'] = 'Il numero interno per il "voice bridge" (da utilizzare se collegato al sistema telefonico)';
$string['privacy:metadata:local_intelliboard_bbb_meet:dialnumber'] = 'Il numero che i partecipanti possono chiamare se utilizzano il telefono normale.';
$string['privacy:metadata:local_intelliboard_bbb_meet:attendeepw'] = 'La Password che sarà richiesta ai Partecipanti per partecipare al Meeting.';
$string['privacy:metadata:local_intelliboard_bbb_meet:moderatorpw'] = 'La Password che sarà richiesta ai Moderatori per partecipare al Meeting o per alcune operazioni amministrative.';
$string['privacy:metadata:local_intelliboard_bbb_meet:running'] = 'Stato del Meeting (attivo|arrestato)';
$string['privacy:metadata:local_intelliboard_bbb_meet:duration'] = 'Durata del Meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:hasuserjoined'] = 'Flag.  Utenti che si sono uniti al Meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:recording'] = 'Flag. Il Meeting sarà registrato';
$string['privacy:metadata:local_intelliboard_bbb_meet:hasbeenforciblyended'] = 'Flag. Il Meeting si è concluso forzatamente';
$string['privacy:metadata:local_intelliboard_bbb_meet:starttime'] = 'Ora di inizio del Meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:endtime'] = 'Ora di fine Meeting';
$string['privacy:metadata:local_intelliboard_bbb_meet:participantcount'] = 'Numero di presenti';
$string['privacy:metadata:local_intelliboard_bbb_meet:listenercount'] = 'Numero di ascoltatori';
$string['privacy:metadata:local_intelliboard_bbb_meet:voiceparticipantcount'] = 'Numero di partecipanti con microfono collegato';
$string['privacy:metadata:local_intelliboard_bbb_meet:videocount'] = 'Numero di partecipanti con videocamera collegata';
$string['privacy:metadata:local_intelliboard_bbb_meet:maxusers'] = 'Numero massimo di partecipanti';
$string['privacy:metadata:local_intelliboard_bbb_meet:moderatorcount'] = 'Numero di moderatori';
$string['privacy:metadata:local_intelliboard_bbb_meet:courseid'] = 'ID del corso';
$string['privacy:metadata:local_intelliboard_bbb_meet:cmid'] = 'ID del modulo del corso';
$string['privacy:metadata:local_intelliboard_bbb_meet:bigbluebuttonbnid'] = 'ID riga nella tabella bigbluebuttonbn';
$string['privacy:metadata:local_intelliboard_bbb_meet:ownerid'] = "ID Proprietario (l'utente che ha creato il Meeting)";

$string['privacy:metadata:local_intelliboard_bbb_atten'] = 'Log dei partecipanti ai Meeting di BigBlueButton';
$string['privacy:metadata:local_intelliboard_bbb_atten:id'] = 'ID partecipante';
$string['privacy:metadata:local_intelliboard_bbb_atten:userid'] = 'ID Utente (riga nella tabella "utente")';
$string['privacy:metadata:local_intelliboard_bbb_atten:fullname'] = 'Nome completo del partecipante al Meeting';
$string['privacy:metadata:local_intelliboard_bbb_atten:role'] = 'Ruolo dei partecipanti al Meeting';
$string['privacy:metadata:local_intelliboard_bbb_atten:ispresenter'] = 'Flag. Il prtecipante fa una presentazione';
$string['privacy:metadata:local_intelliboard_bbb_atten:islisteningonly'] = 'Flag. Il partecipante non ha un microfono o una webcam collegati.';
$string['privacy:metadata:local_intelliboard_bbb_atten:hasjoinedvoice'] = 'Flag. Il partecipante ha collegato il microfono';
$string['privacy:metadata:local_intelliboard_bbb_atten:hasvideo'] = 'Flag. Il partecipante ha collegato la webcam';
$string['privacy:metadata:local_intelliboard_bbb_atten:meetingid'] = 'ID Meeting (ID nel server BigBlueButton)';
$string['privacy:metadata:local_intelliboard_bbb_atten:localmeetingid'] = 'ID Meeting (ID nella tabella local_intelliboard_bbb_meet)';
$string['privacy:metadata:local_intelliboard_bbb_atten:arrivaltime'] = "Ora in cui l'utente Connesso al Meeting";
$string['privacy:metadata:local_intelliboard_bbb_atten:departuretime'] = "Ora in cui l'utente si è Scollegato dal Meeting";
$string['messageprovider:intelliboard_notification'] = 'Notifica di Intelliboard';

$string['verifypeer'] = 'CURLOPT SSL VERIFYPEER';
$string['verifypeer_desc'] = "Questa opzione fa sì che curl verifichi l'autenticità del certificato del peer.";
$string['verifyhost'] = 'CURLOPT SSL VERIFYHOST';
$string['verifyhost_desc'] = 'Questa opzione fa sì che libcurl verifichi che il certificato del server sia per il server previsto.';
$string['cipherlist'] = 'CURLOPT SSL CIPHER LIST';
$string['cipherlist_desc'] = 'Specificare la cifratura da utilizzare per il TLS';
$string['sslversion'] = 'CURLOPT SSLVERSION';
$string['sslversion_desc'] = 'Passa un tipo di dato long come parametro che contiene la versione SSL/TSL da usare.';

$string['debug'] = 'Richieste CURL di debug';
$string['debug_desc'] = '-';

/* IntelliCart */
$string['intellicart'] = 'Integrazione con IntelliCart';
$string['intellicart_desc'] = 'Consentire agli studenti di vedere i report di IntelliCart.';
$string['coursessessionspage'] = 'Pagina sessioni dei corsi';
$string['coursessessions'] = 'Sessioni dei corsi';
$string['session_name'] = 'Nome della sessione';
$string['session_time'] = 'Tempo di sessione';
$string['return_to_sessions'] = 'Ritorna alle Sessioni';
/* IntelliCart END*/

$string['allmod'] = 'Tutte le attività';
$string['customod'] = 'Attività personalizzate';

$string['timespent'] = '------ Il tempo impiegato ----';
$string['inprogress'] = 'In corso';
$string['notstarted'] = 'Non iniziato';
$string['modulename'] = 'Nome del modulo';
$string['viewed'] = 'Visualizzati';
$string['course'] = 'Corso';
$string['courseaverage'] = 'Media del corso';
$string['mygrade'] = 'La mia Valutazione';
$string['myprogress'] = 'Il mio progresso nella valutazione';
$string['instructor_course_shortname'] = 'Mostra il nome breve del corso invece del nome completo';

$string['trackmedia'] = 'Traccia media HTML5';
$string['trackmedia_desc'] = 'Traccia audio e video HTML5';
$string['ianalytics'] = 'IntelliBoard Analytics';

$string['instructor_course_visibility'] = 'Mostra Corsi nascosti/sospesi a [Docente]';
$string['instructor_mode'] = 'Mostra tutti i corsi disponibili a [Docente]';
$string['instructor_mode_access'] = 'Mostra tutti i corsi disponibili a [Docente] con permessi di [Aggiornamento]';
$string['student_course_visibility'] = 'Mostra Corsi nascosti/sospesi a [Studenti]';



$string['support_text1'] = "Tutti i tuoi dati Moodle: semplici, condivisibili, comprensibili e accattivanti. IntelliBoard is a Moodle plugin that puts <strong>120+</strong> reports and monitors into your hands.";
$string['support_text2'] = "Tutti i tuoi dati Moodle: semplici, condivisibili, comprensibili e accattivanti. IntelliBoard is your Moodle reporting and analytics solution, giving you 120+ reports and analytics to help inform your educational business decisions.";
$string['support_info1'] = "Puoi unirti ai nostri <a target='_blank' href='https://intelliboard.net/events'>Webinar</a e farti accompagnare in un tour attraverso le funzionalità di reporting e analisi di IntelliBoard 5.0!";
$string['support_info2'] = "Partecipate ai nostri <a target='_blank' href='https://intelliboard.net/events'>Webinar</a>, o programmate un tour personale dei vostri dati. Con il nostro supporto e servizio di prima classe, vedrete il vostro LMS sotto una luce completamente nuova.";
$string['support_terms'] = "Tutti i diritti riservati.";
$string['support_page'] = "Support Portal";
$string['support_demo'] = "Prenota una demo";
$string['support_trial'] = "Inizia periodo di prova";
$string['support_close'] = "Chiudi";
$string['instructor_custom_groups'] = "Gruppi personalizzati docente";

// settings of tables
$string['table_set_icg'] = 'Corsi del Docente';
$string['table_set_icg_c1'] = 'Nome Corso';
$string['table_set_icg_c2'] = 'Nome breve';
$string['table_set_icg_c3'] = 'Categoria';
$string['table_set_icg_c4'] = 'Studenti Iscritti/Completati';
$string['table_set_icg_c5'] = 'Valutazione media del Corso';
$string['table_set_icg_c6'] = 'Sezioni';
$string['table_set_icg_c7'] = 'Attività/Risorse';
$string['table_set_icg_c8'] = 'Visite';
$string['table_set_icg_c9'] = 'Tempo impiegato';
$string['table_set_icg_c11'] = 'Azioni – Attività';
$string['table_set_icg_c12'] = 'Azioni – Studenti';
$string['percentage_completed_learners'] = 'Percentage of Completed Learners';
$string['avg_visits_per_stud'] = 'Average Visits Per Student';
$string['avg_time_spent_per_stud'] = 'Average Time Spent Per Student';

$string['table_set_ilg'] = 'Corsi del Docente > Studenti';
$string['table_set_ilg_c1'] = 'Nome Studente';
$string['table_set_ilg_c2'] = 'Indirizzo email';
$string['table_set_ilg_c3'] = 'Iscritto';
$string['table_set_ilg_c4'] = 'Ultimo accesso';
$string['table_set_ilg_c5'] = 'Stato';
$string['table_set_ilg_c6'] = 'Valutazione';
$string['table_set_ilg_c7'] = 'Attività/Risorse completate';
$string['table_set_ilg_c8'] = 'Visite';
$string['table_set_ilg_c9'] = 'Tempo impiegato';
$string['table_set_ilg_c10'] = 'Azioni';

$string['table_set_ilg1'] = 'Corsi del Docente > Studenti > Valutazioni';
$string['table_set_ilg1_c1'] = 'Nome Attività';
$string['table_set_ilg1_c2'] = 'Tipo';
$string['table_set_ilg1_c3'] = 'Valutazione';
$string['table_set_ilg1_c4'] = 'Valutato';
$string['table_set_ilg1_c5'] = 'Stato';
$string['table_set_ilg1_c6'] = 'Visite';
$string['table_set_ilg1_c7'] = 'Tempo impiegato';

$string['table_set_iag'] = 'Corsi del Docente > Attività';
$string['table_set_iag_c1'] = 'Nome Attività';
$string['table_set_iag_c2'] = 'Tipo';
$string['table_set_iag_c3'] = 'Studenti completati';
$string['table_set_iag_c4'] = 'Valutazione media';
$string['table_set_iag_c5'] = 'Visite';
$string['table_set_iag_c6'] = 'Tempo impiegato';
$string['table_set_iag_c7'] = 'Azioni';

$string['table_set_iag1'] = 'Corsi del Docente > Attività > Valutazioni';
$string['table_set_iag1_c1'] = 'Nome Studente';
$string['table_set_iag1_c2'] = 'Indirizzo email';
$string['table_set_iag1_c3'] = 'Stato';
$string['table_set_iag1_c4'] = 'Valutazione';
$string['table_set_iag1_c5'] = 'Valutato';
$string['table_set_iag1_c6'] = 'Visite';
$string['table_set_iag1_c7'] = 'Tempo impiegato';

$string['student_grades'] = 'Valutazioni Studente';
$string['grid_view'] = 'Vista a griglia';
$string['list_view'] = 'Vista a lista';
$string['grade_activities_overview'] = 'Graded Activities Overview';
$string['activity'] = 'Activity';