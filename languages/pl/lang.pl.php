<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'W domu',
    'RiskManagement'=>'Zarządzanie Ryzykiem',
    'Reporting'=>'Sprawozdawczości',
    'Configure'=>'Skonfigurować',
    'MyProfile'=>'Mój Profil',
    'Logout'=>'Wyjście',
    'LogInHere'=>'Logowanie do SimpleRisk',
    'Username'=>'Nazwa użytkownika',
    'Password'=>'Hasło',
    'ForgotYourPassword'=>'Zapomniane hasło',
    'Login'=>'Zaloguj się',
    'Reset'=>'Reset',
    'Send'=>'Wysłać',
    'Update'=>'Aktualizacja',
    'SendPasswordResetEmail'=>'Wyślij Reset Hasła Do Poczty E-Mail',
    'PasswordReset'=>'Resetowanie Hasła',
    'ResetToken'=>'Zerowanie Znacznika',
    'RepeatPassword'=>'Powtórz Hasło',
    'Submit'=>'Złożyć',
    'ProfileDetails'=>'Profil Szczegóły',
    'LastLogin'=>'Połącz',
    'ChangePassword'=>'Zmiana Hasła',
    'CurrentPassword'=>'Bieżące Hasło',
    'NewPassword'=>'Nowe Hasło',
    'ConfirmPassword'=>'Potwierdzenie Hasła',
    'ConfigureRiskFormula'=>'Dostosowanie Formuły Ryzyka',
    'ConfigureReviewSettings'=>'Skonfigurować Ustawienia Widzenia',
    'AddAndRemoveValues'=>'Dodawanie i usuwanie wartości',
    'UserManagement'=>'Podręcznik Użytkownika',
    'RedefineNamingConventions'=>'Przeglądu Konwencje Nazewnictwa',
    'AuditTrail'=>'Audyt',
    'Extras'=>'Aplikacje',
    'Announcements'=>'Ogłoszenia',
    'About'=>'O',
    'Impact'=>'Wpływ',
    'Likelihood'=>'Prawdopodobieństwo',
    'MitigationEffort'=>'Wysiłki W Celu Złagodzenia Skutków',
    'Change'=>'Zmiana',
    'to'=>'aby',
    'AddANewUser'=>'Dodaj nowego użytkownika',
    'Type'=>'Typ',
    'FullName'=>'Pełna Nazwa',
    'EmailAddress'=>'Adres e-mail',
    'Teams'=>'Polecenie(y)',
    'ALL'=>'Wszystkie',
    'NONE'=>'Nikt',
    'UserResponsibilities'=>'Obowiązki Użytkownika',
    'AbleToSubmitNewRisks'=>'Możliwość reprezentowania nowe zagrożenia',
    'AbleToModifyExistingRisks'=>'Możliwość modyfikowania istniejących zagrożeń',
    'AbleToCloseRisks'=>'Możliwość zamknięcia ryzyko',
    'AbleToPlanMitigations'=>'Możliwość zaplanować sposoby',
    'AbleToReviewLowRisks'=>'Można zapoznać się niskie ryzyko',
    'AbleToReviewMediumRisks'=>'Można zapoznać się średnie ryzyko',
    'AbleToReviewHighRisks'=>'Można zapoznać się na wysokie ryzyko',
    'AllowAccessToConfigureMenu'=>'Zezwalaj na dostęp do "Konfiguracja" menu',
    'MultiFactorAuthentication'=>'Uwierzytelnianie Wieloskładnikowe',
    'None'=>'Nikt',
    'Add'=>'Dodać',
    'ViewDetailsForUser'=>'Zobacz szczegóły dla użytkownika',
    'DetailsForUser'=>'Dane dla użytkownika',
    'Select'=>'Wybierz',
    'EnableAndDisableUsers'=>'Włączanie i wyłączanie użytkowników',
    'EnableAndDisableUsersHelp'=>'Użyj tej funkcji, aby włączyć lub wyłączyć loginów użytkownika podczas zapisywania dziennika audytu działań użytkownika',
    'DisableUser'=>'Wyłączyć użytkownika',
    'Disable'=>'Wyłączyć',
    'EnableUser'=>'Pozwalają użytkownikowi',
    'Enable'=>'Włączyć',
    'DeleteAnExistingUser'=>'Usunąć istniejącego użytkownika',
    'DeleteCurrentUser'=>'Usunąć bieżącego użytkownika',
    'Delete'=>'Usunąć',
    'SendPasswordResetEmailForUser'=>'Wyślij reset hasła do poczty e-mail dla użytkownika',
    'Category'=>'Kategoria',
    'AddNewCategoryNamed'=>'Dodawanie nowej kategorii nazwy',
    'DeleteCurrentCategoryNamed'=>'Usuń aktualną kategorię nazwy',
    'Team'=>'Zespół',
    'AddNewTeamNamed'=>'Dodaj nową drużynę po imieniu',
    'DeleteCurrentTeamNamed'=>'Usuń aktualną pozycję po imieniu',
    'Technology'=>'Technologia',
    'AddNewTechnologyNamed'=>'Dodaj nowe technologie im.',
    'DeleteCurrentTechnologyNamed'=>'Usuń aktualną technologię im.',
    'SiteLocation'=>'Strona/Lokalizacja',
    'AddNewSiteLocationNamed'=>'Dodawanie nowej strony o nazwie',
    'DeleteCurrentSiteLocationNamed'=>'Usuń bieżącą stronę/miejsce imię',
    'ControlRegulation'=>'Regulacji',
    'AddNewControlRegulationNamed'=>'Dodaj nowe zasady zarządzania im',
    'DeleteCurrentControlRegulationNamed'=>'Usuń bieżący regulacja sterowania nazwy',
    'RiskPlanningStrategy'=>'Strategii Planowania Ryzyka',
    'AddNewRiskPlanningStrategyNamed'=>'Dodaj nowe strategie planowania ryzyka według nazwy',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Usuwanie bieżącej strategii planowania ryzyka według nazwy',
    'CloseReason'=>'Obok Przyczyn',
    'AddNewCloseReasonNamed'=>'Dodaj nowy powodów nazwał',
    'DeleteCurrentCloseReasonNamed'=>'Usuń bieżącą obok przyczyn nazwał',
    'IWantToReviewHighRiskEvery'=>'Chcę, aby każda opinia wysokie ryzyko',
    'IWantToReviewMediumRiskEvery'=>'Chcę, aby każdy komentarz ze średnim ryzykiem',
    'IWantToReviewLowRiskEvery'=>'Chcę, aby każda opinia niskie ryzyko',
    'days'=>'dni',
    'MyClassicRiskFormulaIs'=>'Moja Klasyczna Formuła Ryzyka',
    'RISK'=>'Ryzyko',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Uważam duże ryzyko być coś więcej, niż',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Uważam średnie ryzyko będzie mniejsze, niż wcześniej, ale więcej',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Uważam, niskie ryzyko będzie mniejsze, niż wcześniej, ale więcej',
    'HighRisk'=>'Wysokie Ryzyko',
    'MediumRisk'=>'Średnie Ryzyko',
    'LowRisk'=>'Niskie Ryzyko',
    'Irrelevant'=>'Nie ma znaczenia',
    'SubmitYourRisks'=>'Przedstawienia ryzyka',
    'PlanYourMitigations'=>'Plan łagodzenia',
    'PerformManagementReviews'=>'Wykonać opinii',
    'PrioritizeForProjectPlanning'=>'Planowanie projektów',
    'ReviewRisksRegularly'=>'Regularną ocenę',
    'DocumentANewRisk'=>'Nowy dokument ryzyko',
    'UseThisFormHelp'=>'Użyj tego formularza, aby dokumentu nowego ryzyka w celu rozpatrzenia w procesie zarządzania ryzykiem',
    'Subject'=>'Temat',
    'ExternalReferenceId'=>'Link zewnętrzny ID',
    'ControlNumber'=>'Numer Kontrolny',
    'Owner'=>'Właściciel',
    'OwnersManager'=>'Zarządcy',
    'RiskScoringMethod'=>'Metoda Oceny Ryzyka',
    'CurrentLikelihood'=>'Aktualna Prawdopodobieństwo',
    'CurrentImpact'=>'Aktualny Wpływ',
    'RiskAssessment'=>'Ocena Ryzyka',
    'AdditionalNotes'=>'Dodatkowe Uwagi',
    'UNREVIEWED'=>'NIESPRAWDZONE',
    'PASTDUE'=>'PRZETERMINOWANE',
    'ID'=>'Identyfikator',
    'Status'=>'Stanu',
    'Risk'=>'Ryzyko',
    'DaysOpen'=>'Dni Otwarte',
    'CalculatedRisk'=>'Skalkulowane Ryzyko',
    'SubmittedBy'=>'Przedstawiony',
    'NextReviewDate'=>'Następna Data Przeglądu',
    'CVSSRiskScoring'=>'Ryzyko CVSS strzelił',
    'DREADRiskScoring'=>'Strach oceny ryzyka',
    'OWASPRiskScoring'=>'Ryzyko owasp to strzelił',
    'CustomRiskScoring'=>'Własne Oceny Ryzyka',
    'MitigationPlanningHelp'=>'Poniżej znajduje się lista złożonych zagrożeń, które wymagają planowania łagodzenia',
    'ManagementReviewHelp'=>'Poniżej znajduje się lista złożonych zagrożeń, które wymagają przeglądu zarządzania',
    'Submitted'=>'Przedstawiony',
    'MitigationPlanned'=>'Zmiękczanie Planowanych',
    'ManagementReview'=>'Komentarz Zarządzania',
    'No'=>'Nie',
    'Yes'=>'Tak',
    'AddAndRemoveProjects'=>'Dodawać i usuwać projekty',
    'AddAndRemoveProjectsHelp'=>'Dodawać i usuwać projekty, aby połączyć kilka zagrożeń dla określenia priorytetów',
    'AddNewProjectNamed'=>'Dodaj nowy projekt pod nazwą',
    'DeleteCurrentProjectNamed'=>'Usuń bieżący projekt.',
    'AddUnassignedRisksToProjects'=>'Dodaj Nieprzypisane ryzyka projektów',
    'AddUnassignedRisksToProjectsHelp'=>'Przeciągnij i upuść nieprzypisane ryzyko zaznaczone do rozpatrzenia w ramach projektu w odpowiednim dziale projektu',
    'PrioritizeProjects'=>'Priorytety Projektów',
    'PrioritizeProjectsHelp'=>'Poruszać się wokół projektów i zmienić kolejność priorytetów. Po tym, jak skończysz, nie zapomnij kliknąć przycisk "aktualizuj", aby zapisać zmiany',
    'SaveRisksToProjects'=>'Zapisywanie ryzyka dla projektów',
    'RiskId'=>'Identyfikator ryzyko',
    'RiskActions'=>'Działania',
    'ReopenRisk'=>'Otwórz Ryzyka',
    'CloseRisk'=>'Zamknąć Ryzyka',
    'EditRisk'=>'Edytować Ryzyka',
    'PlanAMitigation'=>'Plan łagodzenia',
    'PerformAReview'=>'Wykonać Przegląd',
    'AddAComment'=>'Dodaj komentarz',
    'ShowRiskScoringDetails'=>'Zobacz ryzyka punktacji szczegóły',
    'HideRiskScoringDetails'=>'Ukryj Ryzykiem Punktacja Szczegóły',
    'Details'=>'Szczegóły',
    'SubmissionDate'=>'Data Złożenia',
    'DateSubmitted'=>'Data Złożenia',
    'EditDetails'=>'Edycja Części',
    'Mitigation'=>'Zmiękczanie',
    'MitigationDate'=>'Data złożenia łagodzenia',
    'PlanningStrategy'=>'Strategia Planowania',
    'CurrentSolution'=>'Aktualna Decyzja',
    'SecurityRequirements'=>'Wymagania Bezpieczeństwa',
    'SecurityRecommendations'=>'Zalecenia Dotyczące Bezpieczeństwa',
    'EditMitigation'=>'Edytować Łagodzenia',
    'LastReview'=>'Ostatni Komentarz',
    'ReviewDate'=>'Data Weryfikacji',
    'Reviewer'=>'Recenzent',
    'Review'=>'Komentarz',
    'NextStep'=>'Następny Krok',
    'Comments'=>'Komentarze',
    'ViewAllReviews'=>'Zobacz Wszystkie Opinie',
    'ReviewHistory'=>'Historia Przegląd',
    'Comment'=>'Komentarz',
    'ClassicRiskScoring'=>'Klasyczny Liczenie Ryzyka',
    'RiskScoringActions'=>'Zabicie Działania Ryzyka',
    'UpdateClassicScore'=>'Aktualizacja Klasyczny Wynik',
    'ScoreBy'=>'Konto',
    'RISKClassicExp1'=>'Ryzyko = ( prawdopodobieństwo x wpływ + 2(uderzenie) )',
    'RISKClassicExp2'=>'Ryzyko = ( prawdopodobieństwo x wpływ + uderzenia )',
    'RISKClassicExp3'=>'Ryzyko = ( prawdopodobieństwo x wpływ )',
    'RISKClassicExp4'=>'Ryzyko = ( prawdopodobieństwo x wpływ + prawdopodobieństwo )',
    'RISKClassicExp5'=>'Ryzyko = ( prawdopodobieństwo x wpływ + 2(prawdopodobieństwo) )',
    'Reason'=>'Przyczyna',
    'CloseOutInformation'=>'Zamknięcie Informacji',
    'SubmitManagementReview'=>'Wyślij Opinię Zarządzania',
    'SubmitRiskMitigation'=>'Przedstawić Minimalizacji Ryzyka',
    'RiskDashboard'=>'Deska Rozdzielcza Ryzyko',
    'RiskTrend'=>'Trendy Ryzyka',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Wszystkie otwarte ryzyka przypisany do mnie',
    'AllOpenRisksByRiskLevel'=>'Wszystkie otwarte ryzyka poziom ryzyka',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Wszystkie otwarte ryzyka uważa projektów według poziomu ryzyka',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Wszystkie otwarte ryzyko przyjmowane są do następnego przeglądu na poziomie ryzyka,',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Wszystkie otwarte ryzyko przedstawić w postaci produkcji na poziom ryzyka',
    'AllOpenRisksByScoringMethod'=>'Wszystkie otwarte metoda oceny ryzyka',
    'AllClosedRisksByRiskLevel'=>'Wszystkie zamknięte ryzyka poziom ryzyka',
    'SubmittedRisksByDate'=>'Przedstawiony Ryzyka Według Daty',
    'MitigationsByDate'=>'Poprawki Według Daty',
    'ManagementReviewsByDate'=>'Zarządzanie Komentarze Wg Daty',
    'ProjectsAndRisksAssigned'=>'Projekty i ryzyko mianowany',
    'OpenRisks'=>'Otwarte Ryzyko',
    'ClosedRisks'=>'Zamknięte Ryzyko',
    'ReportMyOpenHelp'=>'Ten raport pokazuje wszystkie otwarte ryzyko, że bieżącego użytkownika jako właściciela lub zarządcy, związane z ryzykiem wg poziomu ryzyka',
    'ReportOpenHelp'=>'Ten raport pokazuje wszystkie otwarte ryzyka, uporządkowany według stopnia ryzyka',
    'ReportProjectsHelp'=>'Ten raport pokazuje wszystkie otwarte ryzyka projektów jest uporządkowany według stopnia ryzyka',
    'ReportNextReviewHelp'=>'Ten raport pokazuje wszystkie otwarte ryzyko przyjmowane są do następnego przeglądu zamówiłem poziom ryzyka',
    'ReportProductionIssuesHelp'=>'Ten raport pokazuje wszystkie otwarte ryzyka przedstawione jako produkcyjne pytania posortowane według poziomu ryzyka',
    'ReportRiskScoringHelp'=>'Ten raport pokazuje wszystkie metody oceny zagrożeń i ryzyka są oceniane przez każdego',
    'ReportClosedHelp'=>'Ten raport pokazuje wszystkie zamknięte ryzyka wg poziomu ryzyka',
    'ReportSubmittedByDateHelp'=>'Ten raport pokazuje wszystkie ryzyka są uporządkowane według daty zgłoszenia',
    'ReportMitigationsByDateHelp'=>'Ten raport pokazuje wszystkie sposoby planowane są uporządkowane według daty łagodzenia',
    'ReportMgmtReviewsByDateHelp'=>'Ten raport pokazuje wszystkie zarządzanie opinie są uporządkowane według daty komentarz',
    'ReportProjectsAndRisksHelp'=>'Ten raport pokazuje wszystkie projekty i ryzyko nałożonych na nich',
    'Language'=>'Język',
    'AllOpenRisksNeedingReview'=>'Wszystkie otwarte ryzyka, wymagających komentarz',
    'ReportReviewNeededHelp'=>'Ten raport pokazuje wszystkie otwarte ryzyko konieczności zarządzania',
    'CustomValue'=>'Wartość Użytkownika',
    'ClosedRisksByDate'=>'Zamknięte Ryzyka Według Daty',
    'DateClosed'=>'Data Zamknięcia',
    'ClosedBy'=>'Zamknięte',
    'ReportClosedByDateHelp'=>'Ten raport pokazuje wszystkie ryzyka są uporządkowane według daty zamknięcia',
    'AllOpenRisksByTeam'=>'Wszystkie otwarte ryzyko drużyna',
    'ReportRiskTeamsHelp'=>'Ten raport pokazuje wszystkie polecenia i ryzyka przypisanych każdemu',
    'Unassigned'=>'Nieprzypisane',
    'AllOpenRisksByTechnology'=>'Wszystkie Otwarte Ryzyko W Technologii',
    'ReportRiskTechnologiesHelp'=>'Ten raport pokazuje wszystkie technologie i ryzyko przypisane każdemu',
    'RiskLevel'=>'Poziom Ryzyka',
    'BasedOnTheCurrentRiskScore'=>'W oparciu o ocen ryzyka, datę następnego przeglądu będzie ',
    'WouldYouLikeToUseADifferentDate'=>'Czy chciałbyś użyć zamiast innej daty?',
    'RisksOpenedAndClosedOverTime'=>'Otwarty ryzyko i zamknięte z czasem',
    'AllRiskScoresAreAdjusted'=>'Wszystkie oceny ryzyka dopasować w skali 0-10.',
    'DetermineProjectStatus'=>'Określenie Statusu Projektu',
    'ProjectStatusHelp'=>'Umieszczenie projektów na segmenty w zależności od aktualnego stanu.',
    'ActiveProjects'=>'Aktywne Projekty',
    'OnHoldProjects'=>'Na Utrzymanie Projektów',
    'CompletedProjects'=>'Zakończone Projekty',
    'CancelledProjects'=>'Anulowane Projekty',
    'UpdateProjectStatuses'=>'Projekt Aktualizacji Statusów',
    'HighRiskReport'=>'Raport Wysokie Ryzyko',
    'TotalOpenRisks'=>'Wspólna Otwarta Ryzyko',
    'TotalHighRisks'=>'Wspólna Wysokim Ryzykiem',
    'HighRiskPercentage'=>'Wysoki Procent Ryzyka',
    'UpdateClassicScore'=>'Aktualizuj klasyczne wynik',
    'CurrentLikelihood'=>'Prawdopodobieństwo bieżącego',
    'CurrentImpact'=>'Wpływ aktualnej',   
    'UpdateCVSSScore'=>'Aktualizacja CVSS wynik',
    'BaseScoreMetrics'=>'Podstawowe Wskaźniki Wynik',
    'AttackVector'=>'Wektor Ataku',
    'AttackComplexity'=>'Złożoność Ataku',
    'Authentication'=>'Uwierzytelnianie',
    'ConfidentialityImpact'=>'Wpływ Prywatność',
    'IntegrityImpact'=>'Wpływ Integralności',
    'AvailabilityImpact'=>'Dostępność',
    'TemporalScoreMetrics'=>'Tymczasowe Rejestry Wynik',
    'Exploitability'=>'Исчерпаемости',
    'RemediationLevel'=>'Poziom Odzysku',
    'ReportConfidence'=>'Pewność Raport',
    'EnvironmentalScoreMetrics'=>'Wskaźniki Ekologiczne Ocena',
    'CollateralDamagePotential'=>'Oprogramowanie Potencjalnej Szkody',
    'TargetDistribution'=>'Целераспределение',
    'ConfidentialityRequirement'=>'Wymóg Prywatności',
    'IntegrityRequirement'=>'Wymóg Integralności',
    'AvailabilityRequirement'=>'Wymóg Posiadania',
    'UpdateDREADScore'=>'Obawiam się aktualizować wynik',
    'DamagePotential'=>'Potencjalne Szkody',
    'Reproducibility'=>'Powtarzalność',
    'AffectedUsers'=>'Poszkodowani Użytkownicy',
    'Discoverability'=>'Wykrywalność',
    'UpdateOWASPScore'=>'Odśwież listę owasp wynik',
    'ThreatAgentFactors'=>'Niebezpieczne Czynniki Agent',
    'SkillLevel'=>'Poziom Kwalifikacji',
    'Motive'=>'Motyw',
    'Opportunity'=>'Możliwość',
    'Size'=>'Rozmiar',
    'VulnerabilityFactors'=>'Czynniki Podatności',
    'EaseOfDiscovery'=>'Łatwość otwierania',
    'EaseOfExploit'=>'Łatwość korzystania',
    'Awareness'=>'Świadomość',
    'IntrusionDetection'=>'Wykrywania Włamań',
    'TechnicalImpact'=>'Techniczny Wpływ',
    'LossOfConfidentiality'=>'Utrata prywatności',
    'LossOfIntegrity'=>'Utrata integralności',
    'LossOfAvailability'=>'Straty dostępność',
    'LossOfAccountability'=>'Straty w sprawozdawczości',
    'BusinessImpact'=>'Wpływ Na Biznes',
    'FinancialDamage'=>'Straty Finansowe',
    'ReputationDamage'=>'Uszczerbek Na Reputacji',
    'NonCompliance'=>'Nieprzestrzeganie',
    'PrivacyViolation'=>'Naruszenie Prywatności',
    'UpdateCustomScore'=>'Aktualizacja Niestandardowych Wynik',
    'ManuallyEnteredValue'=>'Wprowadzona Wartość',
    'ScoreByClassic'=>'Wynik klasyczny',
    'ScoreByCVSS'=>'Wynik CVSS',
    'ScoreByDREAD'=>'Wynik strach',
    'ScoreByOWASP'=>'Konto fundacji',
    'ScoreByCustom'=>'Wynik niestandardowych',
    'BaseVector'=>'Podstawowy Wektor',
    'TemporalVector'=>'Osi Wektor',
    'EnvironmentalVector'=>'Ekologiczny Wektor',
    'SupportingDocumentation'=>'Dodatkowa Dokumentacja',
    'Import'=>'Importu',
    'Export'=>'Eksport',
    'ActivateTheImportExportExtra'=>'Aktywować import/eksport dodatkowych',
    'PrintableView'=>'Widok Do Druku',
    'GroupBy'=>'Grupa',
    'IncludedColumns'=>'Zawarte Kolumny',
    'AllRisks'=>'Ryzyko',
    'DynamicRiskReport'=>'Dynamiczny Raport O Zagrożeniach',
    'ObsoleteReports'=>'Stare Raporty',
    'Project'=>'Projekt',
    'SortBy'=>'Sortuj Według',
    'MonthSubmitted'=>'Miesiąc Wprowadziła',
    'AssetManagement'=>'Zarządzanie Aktywami',
    'AutomatedDiscovery'=>'Automatyczne Wykrywanie',
    'BatchImport'=>'Wsadowy Import',
    'ManageAssets'=>'Zarządzanie Aktywami',
    'AssetValuation'=>'Ocena Wartości Aktywów',
    'AllowAccessToAssetManagementMenu'=>'Zezwalaj na dostęp do menu "Zarządzanie zasobami" ',
    'AutomatedDiscoveryHelp'=>'Odkryj wszystko, bieżący adres IP po wpisaniu adresów IP. Aktualny adres IP zostanie dodany do listy aktywów. Dopuszczalne formaty:',
    'IPRange'=>'Zakres adresów IP',
    'Search'=>'Wyszukiwanie',
    'AddANewAsset'=>'Dodać nowy Zasób',
    'DeleteAnExistingAsset'=>'Usuń istniejący Zasób',
    'AssetName'=>'Nazwa Środka Trwałego',
    'IPAddress'=>'Adres IP',
    'AssetWasAddedSuccessfully'=>'Zasób został pomyślnie dodany.',
    'AssetWasDeletedSuccessfully'=>'Zasób został pomyślnie usunięty.',
    'ThereWasAProblemAddingTheAsset'=>'Wystąpił problem z dodaniem składnika aktywów.',
    'ThereWasAProblemDeletingTheAsset'=>'Problem usunięcia składnika aktywów.',
    'ComingSoon'=>'Wkrótce',
    'ExportRisks'=>'Eksportowe Ryzyko',
    'ExportMitigations'=>'Eksport Poprawek',
    'ExportReviews'=>'Opinie Na Eksport',
    'ExportCombined'=>'Eksport Mieszane',
    'MitigatedBy'=>'Złagodzone',
    'MitigationId'=>'Identyfikator łagodzenia',
    'ReviewId'=>'Komentarz ID',
    'AffectedAssets'=>'Dotkniętych Aktywów',
    'Activate'=>'Aktywować',
    'DeleteRisks'=>'Usuń Zagrożenia',
    'DeletedRisksCannotBeRecovered'=>'Wykluczyć Ryzyka, Nie Mogą Zostać Przywrócone',
    'RisksDeletedSuccessfully'=>'Ryzyko(y) pomyślnie usunięty',
    'ThereWasAProblemDeletingTheRisk'=>'Problem usuwania ryzyka(ów)',
    'Activated'=>'Aktywowany',
    'IWantToReviewInsignificantRiskEvery'=>'Chcę, aby każdy przegląd niewielkie ryzyko',
    'Insignificant'=>'Drobne',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Uważam, bardzo wysokie ryzyko być coś więcej, niż',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Uważam wysokie ryzyko mniejsze, niż wcześniej, ale więcej',
    'VeryHigh'=>'Bardzo Wysoka',
    'VeryHighRisk'=>'Bardzo Wysokie Ryzyko',
    'IWantToReviewVeryHighRiskEvery'=> 'Chcę, aby każda opinia jest bardzo wysokie ryzyko',
    'AbleToReviewVeryHighRisks'=>'Możliwość widzenia bardzo wysokie ryzyko',
    'AbleToReviewInsignificantRisks'=>'Można zobaczyć niewielkie ryzyko',
    'TotalVeryHighRisks'=>'Wszystkim Bardzo Wysokie Ryzyko',
    'VeryHighRiskPercentage'=>'Bardzo Wysoki Procent Ryzyka',
    'AllTeams'=>'Wszystkie Polecenia',
    'FileUploadSettings'=>'Plik Parametrów Ładowania',
    'AllowedFileTypes'=>'Dozwolone Typy Plików',
    'AddNewFileTypeOf'=>'Dodaj nowy typ pliku',
    'DeleteCurrentFileTypeOf'=>'Usunąć bieżący Typ pliku',
    'MaximumUploadFileSize'=>'Maksymalny Rozmiar Pliku',
    'Bytes'=>'Bajtów',
    'CheckAll'=>'Sprawdź Wszystkie',
    'CheckAllRiskMgmt'=>'Sprawdzić Wszystkie Zarządzania Ryzykiem',
    'CheckAllAssetMgmt'=>'Sprawdź WSZYSTKIE Zarządzanie Aktywami',
    'CheckAllConfigure'=>'Sprawdź Wszystkie Ustawienia',
    'MitigationTeam'=>'Zespół Łagodzenia',
    'ImportRisks'=>'Import Ryzyko',
    'ImportAssets'=>'Import Aktywów',
    'AssetValue'=>'Wartość Aktywów',
    'Register'=>'Zarejestruj się',
    'RegisterSimpleRisk'=>'Zarejestrować SimpleRisk',
    'RegistrationText'=>'Rejestrując się SimpleRisk możesz podać swoje dane kontaktowe, tak, że można być na bieżąco z najnowszymi informacjami wydanie i ważne powiadomienia bezpieczeństwa. Twoje dane nigdy nie zostaną sprzedane osobom trzecim. Przypadki również mają możliwość być zapisywane i aktualizowane z jednym naciśnięciem przycisku.',
    'RegistrationInformation'=>'Dane Rejestracyjne',
    'Company'=>'Firma',
    'JobTitle'=>'Stanowisko',
    'Phone'=>'Telefon',
    'UpgradeSimpleRisk'=>'SimpleRisk Aktualizacji',
    'UpgradeInstructions'=>'Ten rozdział udostępnia aktualizację dodatkowych. Aby upewnić się, że masz zainstalowaną najnowszą wersję, wybierz "aktualizuj", ponownie zarejestrować, i odśwież tę stronę.',
    'NoUpgradeNeeded'=>'Aktualizacja nie jest wymagana.',
    'BackupDatabase'=>'Tworzenie kopii zapasowej bazy danych',
    'UpgradeApplication'=>'Zaktualizować Aplikację',
    'UpgradeDatabase'=>'Zaktualizować bazę danych',
    'CustomExtras'=>'Niestandardowe Aplikacje',
    'CustomExtrasText'=>'Byłoby fajnie, gdyby wszystko było za darmo, tak? Mam nadzieję podstawowej platformy SimpleRisk jest w stanie obsługiwać wszystkie Twoje potrzeby w zakresie zarządzania ryzykiem. Ale, jeśli znajdziesz się chce jeszcze więcej funkcjonalności, opracowaliśmy serię "Dodatki", które będą robić dokładnie to.',
    'Upgrade'=>'Aktualizacja',
    'Install'=>'Ustaw',
    'Purchase'=>'Sprzedam',
    'PasswordPolicy'=>'Zasady Haseł',
    'MinimumNumberOfCharacters'=>'Minimalna liczba znaków',
    'RequireAlphaCharacter'=>'Wymaga Alfa-Symbol',
    'RequireUpperCaseCharacter'=>'Wymagane Duże Litery Znaków',
    'RequireLowerCaseCharacter'=>'Wymagają Małych Liter',
    'RequireNumericCharacter'=>'Wymagają Liczbowy Symbol',
    'RequireSpecialCharacter'=>'Wymagają Specjalnego Znaku',
    'Enabled'=>'All inclusive',
    'RiskPyramid'=>'Piramida Ryzyka',
    'RiskPyramidDescription'=>'Ryzyko jest wyższe piramidy pozwala pokazać rozkład ryzyka pomiędzy różnymi poziomami ryzyka. Top ciężki piramida może być oznaką tego, że organizacja bierze na siebie zbyt wiele ryzyka.',
    'RiskAdvice'=>'Porady Ryzyko',
    'AddDeleteAssets'=>'Dodawanie I Usuwanie Aktywów',
    'EditAssets'=>'Zmiana Aktywów',
    'AutomaticAssetValuation'=>'Automatyczna Wycena Aktywów',
    'ManualAssetValuation'=>'Instrukcja Oceny Aktywów',
    'MinimumValue'=>'Minimalna Wartość',
    'MaximumValue'=>'Maksymalna Wartość',
    'ValueRange'=>'Zakres Wartości',
    'DefaultAssetValuation'=>'Wycena Aktywów Domyślnie',
    'Default'=>'Domyślnie',
    'RisksAndAssets'=>'Ryzyko i aktywa',
    'Report'=>'Raport',
    'RisksByAsset'=>'Ryzyko aktywów',
    'AssetsByRisk'=>'Aktywów stopnia ryzyka',
    'MaximumQuantitativeLoss'=>'Maksymalne Straty Ilościowe',
    'MitigationOwner'=>'Właściciel Łagodzenia',
    'MitigationCost'=>'Koszty Łagodzenia Skutków',
    'RiskColumns'=>'Kolumny Ryzyko',
    'MitigationColumns'=>'Kolumny Łagodzenia',
    'ReviewColumns'=>'Kolumny Przegląd',
    'ChangeStatus'=>'Zmiana Statusu',
    'SetRiskStatusTo'=>'Ustawić Status Ryzyka',
    'AddNewStatusNamed'=>'Dodać nowy status nazwy',
    'DeleteStatusNamed'=>'Status usunąć nazwy',
    'DefaultCurrencySymbol'=>'Symbol Waluty Domyślnej',
    'DefaultValues'=>'Wartości Domyślne',
    'RiskSource'=>'Źródło Ryzyka',
    'AddNewSourceNamed'=>'Dodaj nowe źródło imieniem',
    'DeleteSourceNamed'=>'Usunąć źródło nazwy',
    'CheckAllAssessments'=>'Sprawdzić Wszystkie Oceny',
    'AllowAccessToAssessmentsMenu'=>'Zezwalaj na dostęp do menu "oceny" ',
    'Assessments'=>'Ocen',
    'AvailableAssessments'=>'Dostępne Oceny',
    'PendingRisks'=>'Wstrzymane Ryzyko',
    'CreateAssessment'=>'Utworzyć Oceny',
    'EditAssessment'=>'Edytować Oceny',
    'Overview'=>'Przegląd',
    'OpenVsClosed'=>'Otwarte vs. zamknięte',
    'MitigatedVsUnmitigated'=>'Złagodzić przeciwko Неподслащенной',
    'ReviewedVsUnreviewed'=>'Recenzja przeciwko Unreviewed',
    'OpenedRisks'=>'Otwarty Ryzyko',
    'MailSettings'=>'Ustawienia-Mail',
    'TransportAgent'=>'Agent Transportu',
    'FromName'=>'W Imieniu',
    'FromEmail'=>'Z Poczty E-Mail',
    'ReplyToName'=>'Nazwa Nadawcy',
    'ReplyToEmail'=>'Adres E-Mail',
    'Host'=>'Właściciel',
    'SMTPAuthentication'=>'Uwierzytelnianie SMTP',
    'Encryption'=>'Szyfrowanie',
    'Port'=>'Port',
    'Next'=>'Dalej',
    'NewAssessmentQuestion'=>'Nowy Kwestia Oceny',
    'Question'=>'Pytanie',
    'RiskScore'=>'Ocena Ryzyka',
    'SubmitRisk'=>'Stanowić Zagrożenie',
    'Answer'=>'Odpowiedź',
    'AddQuestion'=>'Dodaj Pytanie',
    'SaveAssessment'=>'Zapisz Oceny',
    'SendAssessment'=>'Wyślij Ocenę',
    'DeleteAssessment'=>'Usuń Oceny',
    'AssessmentName'=>'Nazwa Ocena',
    'SendTo'=>'Wysłać',
    'ActiveAssessments'=>'Aktywny Ocen',
    'SentTo'=>'Wysłany',
    'From'=>'Z',
    'Key'=>'Klucz',
    'GoToSSOLoginPage'=>'Przejdź na stronę logowania jednokrotnego logowania',
    'APIKey'=>'Klucz API',
    'GenerateAPIKey'=>'Wygenerować klucz API',
    'RotateAPIKey'=>'Obróć klucz API',
    'InvalidateAPIKey'=>'Nieważny klucz API',
    'Deactivate'=>'Dezaktywować',
    'ImportExportExtra'=>'Import eksport Extra',
    'SaveDetails'=>'Zapisywanie szczegółów',
    'ClearForm'=>'Wyczyść formularz',
    'SaveMitigation'=>'Zapisz łagodzenia',
    'Cancel'=>'Anuluj',
    'SubmitReview'=>'Prześlij opinię',
    'UnassignedRisks'=>'Nieprzypisane ryzyka',
    'DisableRegistrationNotice'=>'Wyłącz powiadomienia rejestracji',
    'UserPolicy'=>'Zasady użytkownika',
    'UseCaseSensitiveValidationOfUsername'=>'Użyj liter sprawdzania poprawności nazwy użytkownika',
    'MitigationPlanning'=>'Planowane ograniczenie daty',
    'AssetDetails'=>'Szczegóły zasobu',
    'RiskList'=>'Ryzyko zakażenia',
    'Are you sure you want to close the risk? All changes will be lost!'=>'Czy na pewno chcesz zamknąć ryzyko? Wszystkie zmiany zostaną utracone!',
    'MinimumPasswordAge' => 'Minimalny okres ważności hasła',
    'MaximumPasswordAge' => 'Maksymalny okres ważności hasła',
    'MaximumAttemptsLockout' => 'Maksymalna próby blokady',
    'MaximumAttemptsLockoutTime' => 'Czas blokady próby Maksymalna',
    'attempts' => 'próby',
    'minutes' => 'minut',
    'AccountLockedOut' => 'Konto zablokowane',
    'AccountLockoutPolicy' => 'Zasady blokady konta',
    'ImportExportIsDeactivated' => 'Import Eksport jest wyłączona',
    'PurchaseTheExtra' => 'Zakup dodatkowych',
    'ExpandAll' => 'Rozwiń wszystkie',
    'ConditionMessageForMinChar' => 'Hasło powinno zawierać minimum znaków $min_chars.',
    'ConditionMessageForAlpha' => 'Hasło powinno zawierać znak alfa.',
    'ConditionMessageForUppercase' => 'Hasło powinno zawierać wielką literę.',
    'ConditionMessageForLowercase' => 'Hasło powinno zawierać małą literę.',
    'ConditionMessageForDigit' => 'Hasło powinno zawierać cyfrę.',
    'ConditionMessageForSpecialchar' => 'Hasło powinno zawierać znaków specjalnych.',
    'ConditionMessageForMinPasswordAge' => 'Hasła mogą być aktualizowane z Ostatnia aktualizacja czas minimum $min_password_age dni później.',
    'TrustedDomains' => 'Zaufanych domen',
    'SimpleRiskColumnMapping' => 'Mapowanie kolumn SimpleRisk',
    'Mapping' => 'Mapowanie',
    'Optional' => 'Opcjonalne',
    'SaveMappingAs' => 'Zapisać mapowanie jako',
    'EncryptionLevel' => 'Poziom szyfrowania',
    'Level' => 'Poziom',
    'Description' => 'Opis',
    'ShowRiskScoreOverTime' => 'Pokaż Ocena ryzyka na przestrzeni czasu',
    'HideRiskScoreOverTime' => 'Ukryj Ocena ryzyka na przestrzeni czasu',
    'ReviewRegularlyHelp' => 'Poniżej znajduje się lista wszystkich ryzyk posortowane według Unreviewed, ostatnich Due i data następnego przeglądu',
    'RiskScoringHistory' => 'Ryzyka punktacji historii',
    'RiskAddPermissionMessage' => 'Nie masz uprawnień do przedstawienia nowych zagrożeń.  Wszelkie zagrożenia, które próbują przedstawić nie będą rejestrowane.  Jeśli uważasz, że osiągnąłeś ten komunikat błędu, skontaktuj się z administratorem.',
    'SubjectRiskCannotBeEmpty' => 'Temat ryzyka nie może być pusta',
    'InvalidRiskID' => 'Nieprawidłowy identyfikator ryzyka',
    'Success' => 'Sukces',
    'RiskUpdatePermissionMessage' => 'Nie masz uprawnień do modyfikowania ryzyka.  Wszelkie zagrożenia, które próbują modyfikować nie będą rejestrowane.  Jeśli uważasz, że osiągnąłeś ten komunikat błędu, skontaktuj się z administratorem.',
    'RiskReviewPermission' => 'Nie masz uprawnień do przeglądania $risk_level poziom zagrożenia.  Wszelkie opinie, które próbują przedstawić nie będą rejestrowane.  Jeśli uważasz, że osiągnąłeś ten komunikat błędu, skontaktuj się z administratorem.',
    'DateAndTime' => 'Data i czas',
    'mCryptWarning' => 'Rozszerzenie "mcrypt" musi być zainstalowany dla szyfrowania dodatkowe wobec praca poprawnie.  Zainstaluj ją kontynuować.',
    'APIInCompatibleWithEncryptionLevel' => 'Interfejs API nie jest zgodny z poziomem szyfrowania użytkownika dodatkowe bazy danych zaszyfrowanych.',
    'UnauthenticatedAccessInAPI' => 'Dostęp nieuwierzytelniony.  Zaloguj się lub podać klucz do użycia interfejsu API SimpleRisk.',
    'ResetPasswordMessageInUserLevelEncryption' => 'Nie można zresetować hasło, bo ten użytkownik jest szyfrowanie na poziomie użytkownika. Skontaktuj się z administratorem.',
    'YouNeedToSpecifyAnIdParameter' => 'Musisz określić parametr identyfikator.',
    'NoMitigation' => 'Nie ma żadnego zabezpieczenia określonego.',
    'NoReview' => 'Istnieje ma określonego oceny.',
    'MysqldumpPathWasSavedSuccessfully' => 'Mysqldump ścieżki został zapisany pomyślnie.',
    'UnavailableMysqldumpService' => 'Na serwerze jest żadna usługa \'mysqldump\' avaiable. Ustaw ścieżka bezwzględna mysqldump usługi.',
    'AllOpenRisksByTeamByLevel' => 'Wszystkie otwarte ryzyka przez zespół przez poziom ryzyka',
    'Unknown' => 'Nieznane',
    'AllOwners' =>'Wszystkich ryzyk',
    'AllOwnersManagers' => 'Właścicielem wszystkich menedżerów',
    'AddNewReviewNamed' => 'Dodaj opinię o nazwie',
    'DeleteCurrentReviewNamed' => 'Usuń bieżący przegląd o nazwie',
    'AddNewNextstepNamed' => 'Dodaj nowy etap następnego',
    'DeleteCurrentNextstepNamed' => 'Usuń bieżący następnego kroku o nazwie',
    'Settings' => 'Ustawienia',
    'EnablePopupWindowsForTextBoxes' => 'Okien podręcznych dla pól tekstowych',
    'PasswordNoLongerUse' => 'Ten nowy hasło jest ograniczona, więc nie można używać.  Proszę wybrać inne hasło',
    'RememberTheLast' => 'RememberTheLast',
    'Passwords' => 'Hasła',
    'NoOwner' => 'Bez właściciela',
    'NoOwnersManager' => 'Nie Menedżera właścicieli',
    'RiskAverageOverTime' => 'Średnie ryzyko czasem',
    'AverageRiskScore' => 'Średnia ocena ryzyka na',
    'Year' => 'Rok',
    'Month' => 'Miesiąc',
    'Day' => 'Dzień',
    'FilterByAffectedAsset' => 'Przeanalizuj przedmiotowych aktywów',
    'RisksOpened' => 'Ryzyka, otwarte',
    'RisksClosed' => 'Ryzyka, ZAMKNIĘTA',
    'HealthCheck' => 'Sprawdzanie kondycji',
    'RequirePasswordChangeOnLogin' => 'Wymagana jest zmiana hasła logowania',
    'PasswordChangeRequired' => 'Musisz zmienić hasło przed zalogowaniem.',
    'LikelihoodImpact' => 'Prawdopodobieństwa i skutków',
    'MitigationPercent' => 'Łagodzenia procent',
    'MitigationPermissionMessage' => 'Nie masz uprawnień do planowania czynników ograniczających zagrożenie.  Żadnych czynników ograniczających zagrożenie, które próbują przedstawić nie będą rejestrowane.  Jeśli uważasz, że osiągnąłeś ten komunikat błędu, skontaktuj się z administratorem.',
    'ResetCustomDisplaySettings' => 'Zresetuj ustawienia wyświetlania niestandardowej',
    'CustomResetSuccessMessage' => 'Ustawienia wyświetlania niestandardowej została pomyślnie zresetowana',
    'DefaultRiskScore' => 'Ocena ryzyka domyślne',
    'AdditionalStakeholders' => 'Inne zainteresowane strony',
    'AllSkateholders' => 'Wszystkie zainteresowane strony',
    'RiskIdDoesNotExist' => 'Nie istnieje ryzyko ID',
    'RiskTeamPermission' => 'Nie jesteś członkiem zespołu, ryzyko to należy do',
    '' => '',
);

?>
