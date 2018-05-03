<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d-g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Hjem',
    'RiskManagement'=>'Risikostyring',
    'Reporting'=>'Rapportering',
    'Configure'=>'Konfigurer',
    'MyProfile'=>'Min Profil',
    'Logout'=>'Log ud',
    'LogInHere'=>'Login til SimpleRisk',
    'Username'=>'Brugernavn',
    'Password'=>'Adgangskode',
    'ForgotYourPassword'=>'Har du glemt din adgangskode',
    'Login'=>'Log ind',
    'Reset'=>'Nulstille',
    'Send'=>'Send',
    'Update'=>'Opdatering',
    'SendPasswordResetEmail'=>'Send E-Mail Til Nulstilling Af Adgangskode',
    'PasswordReset'=>'Nulstilling af adgangskode',
    'ResetToken'=>'Nulstille Token',
    'RepeatPassword'=>'Gentag Password',
    'Submit'=>'Send',
    'ProfileDetails'=>'Profil Detaljer',
    'LastLogin'=>'Sidste Login',
    'ChangePassword'=>'Skift Adgangskode',
    'CurrentPassword'=>'Nuværende Password',
    'NewPassword'=>'Ny Adgangskode',
    'ConfirmPassword'=>'Bekræft Adgangskode',
    'ConfigureRiskFormula'=>'Konfigurere Risiko Formel',
    'ConfigureReviewSettings'=>'Konfigurere Indstillinger Anmeldelse',
    'AddAndRemoveValues'=>'Tilføje og Fjerne Værdier',
    'UserManagement'=>'Brugerstyring',
    'RedefineNamingConventions'=>'Omdefinere Navngivning',
    'AuditTrail'=>'Revisionsspor',
    'Extras'=>'Tilbehør',
    'Announcements'=>'Meddelelser',
    'About'=>'Om',
    'Impact'=>'Virkning',
    'Likelihood'=>'Sandsynlighed',
    'MitigationEffort'=>'Afbødende Indsats',
    'Change'=>'Skift',
    'to'=>'til',
    'AddANewUser'=>'Tilføj en Ny Bruger',
    'Type'=>'Type',
    'FullName'=>'Fulde Navn',
    'EmailAddress'=>'E-mail-Adresse',
    'Teams'=>'Holdene',
    'ALL'=>'ALLE',
    'NONE'=>'INGEN',
    'UserResponsibilities'=>'Bruger Ansvar',
    'AbleToSubmitNewRisks'=>'I stand til at Fremlægge Nye Risici',
    'AbleToModifyExistingRisks'=>'I stand til at Ændre de Eksisterende Risici',
    'AbleToCloseRisks'=>'I stand til at Lukke Risici',
    'AbleToPlanMitigations'=>'I stand til at Planlægge Afhjælpninger',
    'AbleToReviewLowRisks'=>'I stand til at Gennemgå en Lav Risiko',
    'AbleToReviewMediumRisks'=>'I stand til at Gennemgå Medium Risici',
    'AbleToReviewHighRisks'=>'I stand til at Gennemgå Høj Risiko',
    'AllowAccessToConfigureMenu'=>'Give Adgang til "Konfigurer" i Menuen',
    'MultiFactorAuthentication'=>'Multi-Faktor Autentificering',
    'None'=>'Ingen',
    'Add'=>'Tilføj',
    'ViewDetailsForUser'=>'Få vist Detaljer for Brugeren',
    'DetailsForUser'=>'Detaljer for Brugeren',
    'Select'=>'Vælg',
    'EnableAndDisableUsers'=>'Aktivere og Deaktivere Brugere',
    'EnableAndDisableUsersHelp'=>'Brug denne funktion til at aktivere eller deaktivere bliver bruger login og samtidig opretholde den revisionsspor af brugernes aktiviteter',
    'DisableUser'=>'Deaktiver bruger',
    'Disable'=>'Deaktiver',
    'EnableUser'=>'Aktivér bruger',
    'Enable'=>'Aktiver',
    'DeleteAnExistingUser'=>'Slette en Eksisterende Bruger',
    'DeleteCurrentUser'=>'Slet nuværende bruger',
    'Delete'=>'Slet',
    'SendPasswordResetEmailForUser'=>'Send e-mail til nulstilling af adgangskoden til brugeren',
    'Category'=>'Kategori',
    'AddNewCategoryNamed'=>'Tilføj ny kategori ved navn',
    'DeleteCurrentCategoryNamed'=>'Slet nuværende kategori ved navn',
    'Team'=>'Hold',
    'AddNewTeamNamed'=>'Tilføj ny gruppe ved navn',
    'DeleteCurrentTeamNamed'=>'Slet nuværende team ved navn',
    'Technology'=>'Teknologi',
    'AddNewTechnologyNamed'=>'Tilføj ny teknologi kaldet',
    'DeleteCurrentTechnologyNamed'=>'Slet nuværende teknologi kaldet',
    'SiteLocation'=>'Site/Placering',
    'AddNewSiteLocationNamed'=>'Tilføj nye site/placering ved navn',
    'DeleteCurrentSiteLocationNamed'=>'Slet nuværende site/placering ved navn',
    'ControlRegulation'=>'Kontrolforordningen',
    'AddNewControlRegulationNamed'=>'Tilføj ny kontrolforordning navnet',
    'DeleteCurrentControlRegulationNamed'=>'Slet nuværende kontrol forordning navnet',
    'RiskPlanningStrategy'=>'Risiko Planlægning Af Strategi',
    'AddNewRiskPlanningStrategyNamed'=>'Tilføj nye risiko-planlægning, strategi, opkaldt',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Slet nuværende risiko planlægning strategi hedder',
    'CloseReason'=>'Tæt Årsag',
    'AddNewCloseReasonNamed'=>'Tilføj ny grund tæt ved navn',
    'DeleteCurrentCloseReasonNamed'=>'Slet nuværende grund tæt ved navn',
    'IWantToReviewHighRiskEvery'=>'Jeg ønsker at gennemgå hver HØJ risiko',
    'IWantToReviewMediumRiskEvery'=>'Jeg ønsker at gennemgå en MELLEMSTOR risiko, hver',
    'IWantToReviewLowRiskEvery'=>'Jeg ønsker at gennemgå LAV risiko hver',
    'days'=>'dage',
    'MyClassicRiskFormulaIs'=>'Min Klassiske Risiko-Formlen Er',
    'RISK'=>'RISIKO',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Jeg mener, HØJ risiko for at være noget, der er større end',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Jeg mener, MEDIUM risiko for at være mindre end ovenstående, men større end',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Jeg mener, LAV risiko for at være mindre end ovenstående, men større end',
    'HighRisk'=>'Høj Risiko',
    'MediumRisk'=>'Mellemstor Risiko',
    'LowRisk'=>'Lav Risiko',
    'Irrelevant'=>'Irrelevant',
    'SubmitYourRisks'=>'Indsende risiko',
    'PlanYourMitigations'=>'Planen afbødning',
    'PerformManagementReviews'=>'Udføre anmeldelser',
    'PrioritizeForProjectPlanning'=>'Planlægge projekter',
    'ReviewRisksRegularly'=>'Anmeld regelmæssigt',
    'DocumentANewRisk'=>'Dokument en Ny Risiko',
    'UseThisFormHelp'=>'Brug denne formular for at dokumentere en ny risiko for behandling i Risk Management Processen',
    'Subject'=>'Emne',
    'ExternalReferenceId'=>'Ekstern Reference ID',
    'ControlNumber'=>'Kontrol Nummer',
    'Owner'=>'Ejer',
    'OwnersManager'=>'Ejerens Manager',
    'RiskScoringMethod'=>'Risiko Score Metode',
    'CurrentLikelihood'=>'Nuværende Sandsynlighed',
    'CurrentImpact'=>'Nuværende Indvirkning',
    'RiskAssessment'=>'Risikovurdering',
    'AdditionalNotes'=>'Ekstra Bemærkninger',
    'UNREVIEWED'=>'UREVIDEREDE',
    'PASTDUE'=>'TIDLIGERE PÅ GRUND AF',
    'ID'=>'ID',
    'Status'=>'Status',
    'Risk'=>'Risiko',
    'DaysOpen'=>'Åbne Dage',
    'CalculatedRisk'=>'Kalkuleret Risiko',
    'SubmittedBy'=>'Indsendt Af',
    'NextReviewDate'=>'Næste Revision Dato',
    'CVSSRiskScoring'=>'CVSS Risiko Scoring',
    'DREADRiskScoring'=>'FRYGTER Risiko Scoring',
    'OWASPRiskScoring'=>'OWASP Risiko Scoring',
    'CustomRiskScoring'=>'Brugerdefineret Risiko Scoring',
    'MitigationPlanningHelp'=>'Nedenfor er en liste over de indsendte risici, der kræver afhjælpning planlægning',
    'ManagementReviewHelp'=>'Nedenfor er en liste over de indsendte risici, der kræver en ledelsesberetning,',
    'Submitted'=>'Indsendt',
    'MitigationPlanned'=>'Afhjælpning Planlagt',
    'ManagementReview'=>'Ledelsens Evaluering',
    'No'=>'Ingen',
    'Yes'=>'Ja',
    'AddAndRemoveProjects'=>'Tilføje og Fjerne Projekter',
    'AddAndRemoveProjectsHelp'=>'Tilføje og fjerne projekter med henblik på at inddrage flere risici sammen for prioritering',
    'AddNewProjectNamed'=>'Tilføj nye projekt, kaldet',
    'DeleteCurrentProjectNamed'=>'Slet nuværende projekt hedder',
    'AddUnassignedRisksToProjects'=>'Tilføj Risici, der er Tildelt til Projekter',
    'AddUnassignedRisksToProjectsHelp'=>'Træk og slip-tildelt risici, der er markeret for at blive betragtet som et projekt i det rette projekt-fanen',
    'PrioritizeProjects'=>'Prioritere Projekter',
    'PrioritizeProjectsHelp'=>'Flyt projekter rundt og ændre rækkefølgen af prioritering. Når du er færdig, må du ikke glemme at trykke på "Opdater" - knappen for at gemme dine ændringer',
    'SaveRisksToProjects'=>'Spar Risici til Projekter',
    'RiskId'=>'Risiko-ID',
    'RiskActions'=>'Handlinger',
    'ReopenRisk'=>'Genåbne Risiko',
    'CloseRisk'=>'Tæt Risiko',
    'EditRisk'=>'Rediger Risiko',
    'PlanAMitigation'=>'Planlægge en Afbødning',
    'PerformAReview'=>'Udføre en Anmeldelse',
    'AddAComment'=>'Tilføj en Kommentar',
    'ShowRiskScoringDetails'=>'Se risiko Scoring detaljer',
    'HideRiskScoringDetails'=>'Skjule Risiko Score Detaljer',
    'Details'=>'Detaljer',
    'SubmissionDate'=>'Indsendelse Dato',
    'DateSubmitted'=>'Dato Indsendt',
    'EditDetails'=>'Rediger Detaljer',
    'Mitigation'=>'Afbødning',
    'MitigationDate'=>'Afbødning indsendelsesdatoen',
    'PlanningStrategy'=>'Planlægning Af Strategi',
    'CurrentSolution'=>'Nuværende Løsning',
    'SecurityRequirements'=>'Kravene Til Sikkerhed',
    'SecurityRecommendations'=>'Sikkerhed Anbefalinger',
    'EditMitigation'=>'Rediger Afbødning',
    'LastReview'=>'Sidste Revision',
    'ReviewDate'=>'Revision Dato',
    'Reviewer'=>'Anmelder',
    'Review'=>'Anmeldelse',
    'NextStep'=>'Næste Skridt',
    'Comments'=>'Kommentarer',
    'ViewAllReviews'=>'Vis Alle Anmeldelser',
    'ReviewHistory'=>'Anmeldelse Historie',
    'Comment'=>'Kommentar',
    'ClassicRiskScoring'=>'Klassiske Risiko Scoring',
    'RiskScoringActions'=>'Risiko Score Handlinger',
    'UpdateClassicScore'=>'Opdatering Klassiske Score',
    'ScoreBy'=>'Resultat af',
    'RISKClassicExp1'=>'RISIKO = ( Sandsynlighed x Effekt + 2(Virkning) )',
    'RISKClassicExp2'=>'RISIKO = ( Sandsynlighed x Effekt + Effekt )',
    'RISKClassicExp3'=>'RISIKO = ( Sandsynlighed x Virkning )',
    'RISKClassicExp4'=>'RISIKO = ( Sandsynlighed x Effekt + Sandsynligheden )',
    'RISKClassicExp5'=>'RISIKO = ( Sandsynlighed x Effekt + 2(Sandsynlighed) )',
    'Reason'=>'Årsag',
    'CloseOutInformation'=>'Close-Out Oplysninger',
    'SubmitManagementReview'=>'Send Management Review',
    'SubmitRiskMitigation'=>'Send Risikobegrænsende',
    'RiskDashboard'=>'Risiko Dashboard',
    'RiskTrend'=>'Risiko Tendens',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Alle åbne risici tildelt mig',
    'AllOpenRisksByRiskLevel'=>'Alle Åbne Risici ved Risiko-Niveau',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Alle Åbne Risici, som til Projekter af Risiko-Niveau',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Alle Åbne Risici, der Accepteres, Indtil Næste Gennemgang af Risiko-Niveau',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Alle Åbne Risici, til at sende som en Produktion Udstedelse af Risiko-Niveau',
    'AllOpenRisksByScoringMethod'=>'Alle Åbne Risici ved at Score Metode',
    'AllClosedRisksByRiskLevel'=>'Alle Lukkede Risici ved Risiko-Niveau',
    'SubmittedRisksByDate'=>'Indsendt Af Risici Ved Dato',
    'MitigationsByDate'=>'Afhjælpninger Efter Dato',
    'ManagementReviewsByDate'=>'Management Anmeldelser Af Dato',
    'ProjectsAndRisksAssigned'=>'Projekter og Risici, der er Tildelt',
    'OpenRisks'=>'Åben Risici',
    'ClosedRisks'=>'Lukkede Risici',
    'ReportMyOpenHelp'=>'Denne rapport viser alle åbne risici, som den aktuelle bruger som ejer eller leder, der er forbundet med den risiko, der er bestilt af risiko-niveau',
    'ReportOpenHelp'=>'Denne rapport viser alle åbne risici, der er bestilt af risiko-niveau',
    'ReportProjectsHelp'=>'Denne rapport viser alle åbne risici, som for projekter, der er bestilt af risiko-niveau',
    'ReportNextReviewHelp'=>'Denne rapport viser alle åbne risici, der accepteres, indtil næste undersøgelse, bestilt af risiko-niveau',
    'ReportProductionIssuesHelp'=>'Denne rapport viser alle åbne risici, der er forelagt som produktion spørgsmål bestilt af risiko-niveau',
    'ReportRiskScoringHelp'=>'Denne rapport viser alle risiko scoring metoder og de risici, der er scoret med hver',
    'ReportClosedHelp'=>'Denne rapport viser alle lukkede risici, der er bestilt af risiko-niveau',
    'ReportSubmittedByDateHelp'=>'Denne rapport viser alle risici bestilles ved indsendelse dato',
    'ReportMitigationsByDateHelp'=>'Denne rapport viser alle afhjælpninger planlagt bestilt af afbødning dato',
    'ReportMgmtReviewsByDateHelp'=>'Denne rapport viser alle ledelsens evaluering bestilt af revision dato',
    'ReportProjectsAndRisksHelp'=>'Denne rapport viser, at alle projekter og de risici, der er tildelt til dem',
    'Language'=>'Sprog',
    'AllOpenRisksNeedingReview'=>'Alle Åbne Risici, der er Behov for en Revision',
    'ReportReviewNeededHelp'=>'Denne rapport viser alle åbne risici, der er behov for en ledelsesberetning,',
    'CustomValue'=>'Brugerdefineret Værdi',
    'ClosedRisksByDate'=>'Lukkede Risici Efter Dato',
    'DateClosed'=>'Dato Lukket',
    'ClosedBy'=>'Lukket',
    'ReportClosedByDateHelp'=>'Denne rapport viser alle risici, der er bestilt af lukning dato',
    'AllOpenRisksByTeam'=>'Alle Åbne Risici ved Team',
    'ReportRiskTeamsHelp'=>'Denne rapport viser alle hold og de risici, der er tildelt til hver',
    'Unassigned'=>'Ikke tildelt',
    'AllOpenRisksByTechnology'=>'Alle Åbne Risici Ved Teknologien',
    'ReportRiskTechnologiesHelp'=>'Denne rapport viser alle teknologier og de risici, der er tildelt til hver',
    'RiskLevel'=>'Risiko Niveau',
    'BasedOnTheCurrentRiskScore'=>'Baseret på din risikoscore, vil din næste anmeldelse dato blive ',
    'WouldYouLikeToUseADifferentDate'=>'Vil du gerne bruge en anden dato i stedet?',
    'RisksOpenedAndClosedOverTime'=>'Risici, der Åbnede og Lukkede sig Over Tid',
    'AllRiskScoresAreAdjusted'=>'All risk score er justeret til at passe på en skala fra 0-10.',
    'DetermineProjectStatus'=>'Bestemme Projektets Status',
    'ProjectStatusHelp'=>'Sted projekter i enheder baseret på deres aktuelle status.',
    'ActiveProjects'=>'Aktive Projekter',
    'OnHoldProjects'=>'På Hold Projekter',
    'CompletedProjects'=>'Afsluttede Projekter',
    'CancelledProjects'=>'Aflyst Projekter',
    'UpdateProjectStatuses'=>'Opdatering Projekt Status',
    'HighRiskReport'=>'Høj Risiko Rapport',
    'TotalOpenRisks'=>'Total Åben Risici',
    'TotalHighRisks'=>'Total Høj Risiko',
    'HighRiskPercentage'=>'Høj Risiko Procent',
    'UpdateClassicScore'=>'Opdatering klassiske Score',
    'CurrentLikelihood'=>'Nuværende sandsynligheden',
    'CurrentImpact'=>'Aktuelle indvirkning',   
    'UpdateCVSSScore'=>'Opdatering CVSS-Score',
    'BaseScoreMetrics'=>'Base Score Målinger',
    'AttackVector'=>'Angreb',
    'AttackComplexity'=>'Angreb Kompleksitet',
    'Authentication'=>'Godkendelse',
    'ConfidentialityImpact'=>'Fortrolighed Virkning',
    'IntegrityImpact'=>'Integritet Virkning',
    'AvailabilityImpact'=>'Tilgængeligheden Virkning',
    'TemporalScoreMetrics'=>'Tidsmæssig Score Målinger',
    'Exploitability'=>'Mulighed for udnyttelse',
    'RemediationLevel'=>'Oprydning Niveau',
    'ReportConfidence'=>'Rapport Tillid',
    'EnvironmentalScoreMetrics'=>'Miljømæssige Score Målinger',
    'CollateralDamagePotential'=>'Collateral Damage Potentiale',
    'TargetDistribution'=>'Target Distribution',
    'ConfidentialityRequirement'=>'Tavshedspligt',
    'IntegrityRequirement'=>'Integritet Krav',
    'AvailabilityRequirement'=>'Tilgængeligheden Kravet',
    'UpdateDREADScore'=>'Opdatering ANGST Score',
    'DamagePotential'=>'Potentiel Skade',
    'Reproducibility'=>'Reproducerbarhed',
    'AffectedUsers'=>'Berørte Brugere',
    'Discoverability'=>'Synlighed',
    'UpdateOWASPScore'=>'Opdatering OWASP Score',
    'ThreatAgentFactors'=>'Trussel Agent Faktorer',
    'SkillLevel'=>'Niveau',
    'Motive'=>'Motiv',
    'Opportunity'=>'Mulighed',
    'Size'=>'Størrelse',
    'VulnerabilityFactors'=>'Faktorer, Der',
    'EaseOfDiscovery'=>'Lethed af Discovery',
    'EaseOfExploit'=>'Nem Udnytte',
    'Awareness'=>'Bevidsthed',
    'IntrusionDetection'=>'Intrusion Detection',
    'TechnicalImpact'=>'Teknisk Indvirkning',
    'LossOfConfidentiality'=>'Tab af Fortrolighed',
    'LossOfIntegrity'=>'Tab af Integritet',
    'LossOfAvailability'=>'Tab af Tilgængelighed',
    'LossOfAccountability'=>'Tab af Ansvarlighed',
    'BusinessImpact'=>'Konsekvenser For Erhvervslivet',
    'FinancialDamage'=>'Finansielle Skader',
    'ReputationDamage'=>'Omdømme Skade',
    'NonCompliance'=>'Manglende Overholdelse',
    'PrivacyViolation'=>'Privatlivets Fred, Overtrædelse',
    'UpdateCustomScore'=>'Opdatering Brugerdefinerede Score',
    'ManuallyEnteredValue'=>'Manuelt Indtastede Værdi',
    'ScoreByClassic'=>'Resultat af Classic',
    'ScoreByCVSS'=>'Resultat af CVSS',
    'ScoreByDREAD'=>'Resultat af SKRÆK',
    'ScoreByOWASP'=>'Resultat af OWASP',
    'ScoreByCustom'=>'Resultat af Brugerdefinerede',
    'BaseVector'=>'Base Vektor',
    'TemporalVector'=>'Tidsmæssig Vektor',
    'EnvironmentalVector'=>'Miljømæssige Vektor',
    'SupportingDocumentation'=>'Dokumentation',
    'Import'=>'Import',
    'Export'=>'Eksport',
    'ActivateTheImportExportExtra'=>'Aktivere Import/Eksport-Ekstra',
    'PrintableView'=>'Udskrift',
    'GroupBy'=>'Gruppen Af',
    'IncludedColumns'=>'I Prisen Kolonner',
    'AllRisks'=>'Alle Risici',
    'DynamicRiskReport'=>'Dynamisk Risiko-Rapport',
    'ObsoleteReports'=>'Forældede Rapporter',
    'Project'=>'Projektet',
    'SortBy'=>'Sortér Efter',
    'MonthSubmitted'=>'Måned Indsendt',
    'AssetManagement'=>'Asset Management',
    'AutomatedDiscovery'=>'Automatisk Opdagelse',
    'BatchImport'=>'Batchimport',
    'ManageAssets'=>'Styre Aktiver',
    'AssetValuation'=>'Værdiansættelse Af Aktiver',
    'AllowAccessToAssetManagementMenu'=>'Give Adgang til "Asset Management" i Menuen',
    'AutomatedDiscoveryHelp'=>'Oplev alle bor IP-adresser i den angivne IP-interval. Bor IP-adresser vil blive tilføjet til den liste over aktiver. Acceptabelt formater:',
    'IPRange'=>'IP-området',
    'Search'=>'Søg',
    'AddANewAsset'=>'Tilføje et Nyt Aktiv',
    'DeleteAnExistingAsset'=>'Slette en Eksisterende Aktiv',
    'AssetName'=>'Aktiv Navn',
    'IPAddress'=>'IP-Adresse',
    'AssetWasAddedSuccessfully'=>'Aktivet blev tilføjet.',
    'AssetWasDeletedSuccessfully'=>'Aktiv was deleted successfully.',
    'ThereWasAProblemAddingTheAsset'=>'Der var et problem med tilføjelse af aktivet.',
    'ThereWasAProblemDeletingTheAsset'=>'Der var et problem sletning af aktivet.',
    'ComingSoon'=>'Kommer Snart',
    'ExportRisks'=>'Eksport Risici',
    'ExportMitigations'=>'Eksport Afhjælpninger',
    'ExportReviews'=>'Eksport Anmeldelser',
    'ExportCombined'=>'Eksport Kombineret',
    'MitigatedBy'=>'Afhjælpes Ved',
    'MitigationId'=>'Afhjælpning-ID',
    'ReviewId'=>'Gennemgå ID',
    'AffectedAssets'=>'Påvirket Aktiver',
    'Activate'=>'Aktivere',
    'DeleteRisks'=>'Slet Risici',
    'DeletedRisksCannotBeRecovered'=>'Slettet Risici, Der Ikke Kan Inddrives',
    'RisksDeletedSuccessfully'=>'Risiko(s) Deleted Successfully',
    'ThereWasAProblemDeletingTheRisk'=>'Der Var et Problem Sletning af den Risiko(r)',
    'Activated'=>'AKTIVERET',
    'IWantToReviewInsignificantRiskEvery'=>'Jeg ønsker at gennemgå UBETYDELIG risiko hver',
    'Insignificant'=>'Ubetydelige',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Jeg anser for at være MEGET HØJ risiko for at være noget, der er større end',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Jeg mener, HØJ risiko for at være mindre end ovenstående, men større end',
    'VeryHigh'=>'Meget Høj',
    'VeryHighRisk'=>'Meget Høj Risiko',
    'IWantToReviewVeryHighRiskEvery'=> 'Jeg ønsker at gennemgå en MEGET HØJ risiko hver',
    'AbleToReviewVeryHighRisks'=>'I stand til at Gennemgå en Meget Høj Risiko',
    'AbleToReviewInsignificantRisks'=>'I stand til at Gennemgå Ubetydelige Risici',
    'TotalVeryHighRisks'=>'Total Meget Høj Risiko',
    'VeryHighRiskPercentage'=>'Meget Høj Risiko Procent',
    'AllTeams'=>'Alle Hold',
    'FileUploadSettings'=>'Fil-Upload-Indstillinger',
    'AllowedFileTypes'=>'Tilladte Filtyper',
    'AddNewFileTypeOf'=>'Tilføj en ny fil type',
    'DeleteCurrentFileTypeOf'=>'Slet aktuelle fil type',
    'MaximumUploadFileSize'=>'Maksimale Upload Fil Størrelse',
    'Bytes'=>'Byte',
    'CheckAll'=>'Check Alle',
    'CheckAllRiskMgmt'=>'Check Alle Risikostyring',
    'CheckAllAssetMgmt'=>'Check Alle Værdipapirer Af Asset Management',
    'CheckAllConfigure'=>'Check Alle Konfigurer',
    'MitigationTeam'=>'Afhjælpning Team',
    'ImportRisks'=>'Import Risici',
    'ImportAssets'=>'Import Aktiver',
    'AssetValue'=>'Indre Værdi',
    'Register'=>'Registrer dig',
    'RegisterSimpleRisk'=>'Registrer SimpleRisk',
    'RegistrationText'=>'Ved at registrere SimpleRisk du vil levere dine kontakt oplysninger, så du kan være opdateret med den nyeste udgivelse oplysninger og vigtige sikkerheds-meddelelser. Dine oplysninger vil aldrig blive solgt til en tredjepart. Registreret tilfælde også har mulighed for at blive bakket op og opgraderet med et klik på en knap.',
    'RegistrationInformation'=>'Registrering Af Oplysninger',
    'Company'=>'Virksomhed',
    'JobTitle'=>'Job Titel',
    'Phone'=>'Telefonen',
    'UpgradeSimpleRisk'=>'Opgradering SimpleRisk',
    'UpgradeInstructions'=>'Dette afsnit bruger Opgraderingen Ekstra. Sørg for, at du har den nyeste version, skal du vælge "Update", re-register, og genindlæse denne side.',
    'NoUpgradeNeeded'=>'Ingen opgradering er nødvendigt på dette tidspunkt.',
    'BackupDatabase'=>'Backup af Database',
    'UpgradeApplication'=>'Opgradering af Ansøgningen',
    'UpgradeDatabase'=>'Opgradere Databasen',
    'CustomExtras'=>'Brugerdefineret Tilbehør',
    'CustomExtrasText'=>'Det ville være fantastisk, hvis alt var gratis, højre? Forhåbentlig kernen SimpleRisk platform er i stand til at tjene alle dine risikostyring behov. Men, hvis du finde dig selv stadig ønsker mere funktionalitet, har vi udviklet en serie af "Ekstra", der vil gøre netop det.',
    'Upgrade'=>'Opgradering',
    'Install'=>'Installere',
    'Purchase'=>'Køb',
    'PasswordPolicy'=>'Password-Politik',
    'MinimumNumberOfCharacters'=>'Minimum Antal Tegn',
    'RequireAlphaCharacter'=>'Kræver, At Alpha Karakter',
    'RequireUpperCaseCharacter'=>'Kræver Øvre Tilfælde Karakter',
    'RequireLowerCaseCharacter'=>'Kræver Lavere Tilfælde Karakter',
    'RequireNumericCharacter'=>'Kræver Numerisk Tegn',
    'RequireSpecialCharacter'=>'Kræver Særlig Karakter',
    'Enabled'=>'Aktiveret',
    'RiskPyramid'=>'Risiko Pyramide',
    'RiskPyramidDescription'=>'Risikoen pyramide ovenstående er med til at vise fordelingen af risici mellem de forskellige risikoniveauer. En top-tung pyramide kan være et tegn på, at din organisation er ved at tage for meget risiko.',
    'RiskAdvice'=>'Risiko For Rådgivning',
    'AddDeleteAssets'=>'Tilføje Og Slette Aktiver',
    'EditAssets'=>'Aktiver Rediger',
    'AutomaticAssetValuation'=>'Automatisk Værdiansættelse',
    'ManualAssetValuation'=>'Vejledning Til Værdiansættelse Af Aktiver',
    'MinimumValue'=>'Minimum Værdi',
    'MaximumValue'=>'Maksimale Værdi',
    'ValueRange'=>'Værdi',
    'DefaultAssetValuation'=>'Standard Værdiansættelse',
    'Default'=>'Standard',
    'RisksAndAssets'=>'Risici og Aktiver',
    'Report'=>'Rapport',
    'RisksByAsset'=>'Risici ved Aktivet',
    'AssetsByRisk'=>'Aktiver med Risiko',
    'MaximumQuantitativeLoss'=>'Kvantitativ Tab',
    'MitigationOwner'=>'Afhjælpning Ejer',
    'MitigationCost'=>'Afhjælpning Omkostninger',
    'RiskColumns'=>'Risiko Kolonner',
    'MitigationColumns'=>'Afbødning Af Kolonner',
    'ReviewColumns'=>'Anmeldelse Kolonner',
    'ChangeStatus'=>'Ændre Status',
    'SetRiskStatusTo'=>'Sæt Risiko Status',
    'AddNewStatusNamed'=>'Tilføj ny status ved navn',
    'DeleteStatusNamed'=>'Slet status navnet',
    'DefaultCurrencySymbol'=>'Standard Valuta Symbol',
    'DefaultValues'=>'Standard Værdier',
    'RiskSource'=>'Kilde Til Risiko',
    'AddNewSourceNamed'=>'Tilføj ny kilde ved navn',
    'DeleteSourceNamed'=>'Slette kilde ved navn',
    'CheckAllAssessments'=>'Check Alle Vurderinger',
    'AllowAccessToAssessmentsMenu'=>'Give Adgang til "Vurderinger" i Menuen',
    'Assessments'=>'Vurderinger',
    'AvailableAssessments'=>'Til Rådighed Vurderinger',
    'PendingRisks'=>'Indtil Risici',
    'CreateAssessment'=>'Opret Vurdering',
    'EditAssessment'=>'Rediger Vurdering',
    'Overview'=>'Oversigt',
    'OpenVsClosed'=>'Åben vs. Lukket',
    'MitigatedVsUnmitigated'=>'Afbødet vs Ubetinget',
    'ReviewedVsUnreviewed'=>'Anmeldt vs Ureviderede',
    'OpenedRisks'=>'Åbnede Risici',
    'MailSettings'=>'E-Mail Indstillinger',
    'TransportAgent'=>'Transport Agent',
    'FromName'=>'Fra Navn',
    'FromEmail'=>'Fra E-Mail',
    'ReplyToName'=>'ReplyTo Navn',
    'ReplyToEmail'=>'ReplyTo E-Mail',
    'Host'=>'Vært',
    'SMTPAuthentication'=>'SMTP-Godkendelse',
    'Encryption'=>'Kryptering',
    'Port'=>'Port',
    'Next'=>'Næste',
    'NewAssessmentQuestion'=>'Ny Assessment Spørgsmål',
    'Question'=>'Spørgsmål',
    'RiskScore'=>'Risiko Score',
    'SubmitRisk'=>'Send Risiko',
    'Answer'=>'Svar',
    'AddQuestion'=>'Tilføj Spørgsmål',
    'SaveAssessment'=>'Spar Vurdering',
    'SendAssessment'=>'Send Vurdering',
    'DeleteAssessment'=>'Slet Vurdering',
    'AssessmentName'=>'Vurdering Navn',
    'SendTo'=>'Send Til',
    'ActiveAssessments'=>'Aktive Vurderinger',
    'SentTo'=>'Sendes Til',
    'From'=>'Fra',
    'Key'=>'Nøgle',
    'GoToSSOLoginPage'=>'Gå til SSO Login side',
    'APIKey'=>'API-nøgle',
    'GenerateAPIKey'=>'Generere API-nøgle',
    'RotateAPIKey'=>'Rotere API-nøgle',
    'InvalidateAPIKey'=>'Ugyldig API-nøgle',
    'Deactivate'=>'Deaktivere',
    'ImportExportExtra'=>'Import-eksport ekstra',
    'SaveDetails'=>'Gemme oplysninger',
    'ClearForm'=>'Ryd formular',
    'SaveMitigation'=>'Gemme afbødning',
    'Cancel'=>'Annuller',
    'SubmitReview'=>'Indgive anmeldelse',
    'UnassignedRisks'=>'Ikke-tildelte risici',
    'DisableRegistrationNotice'=>'Deaktivere registrering varsel',
    'UserPolicy'=>'Brugerpolitik',
    'UseCaseSensitiveValidationOfUsername'=>'Bruge bogstaver validering af brugernavnet',
    'MitigationPlanning'=>'Planlagte afbødning dato',
    'AssetDetails'=>'Aktiv detaljer',
    'RiskList'=>'Risiko liste',
    'Are you sure you want to close the risk? All changes will be lost!'=>'Vil du lukke risikoen? Alle ændringer vil gå tabt!',
    'MinimumPasswordAge' => 'Minimumperiode for adgangskode',
    'MaximumPasswordAge' => 'Maksimumperiode for adgangskode',
    'MaximumAttemptsLockout' => 'Maksimum forsøg Lockout',
    'MaximumAttemptsLockoutTime' => 'Maksimum forsøg Lockout tid',
    'attempts' => 'forsøg på',
    'minutes' => 'minutter',
    'AccountLockedOut' => 'Konto låst ude',
    'AccountLockoutPolicy' => 'Politik for kontospærring',
    'ImportExportIsDeactivated' => 'Import-eksport er deaktiveret',
    'PurchaseTheExtra' => 'Køb ekstra',
    'ExpandAll' => 'Udvid alle',
    'ConditionMessageForMinChar' => 'Adgangskoden skal indeholde et minimum af $min_chars tegn.',
    'ConditionMessageForAlpha' => 'Adgangskoden skal indeholde en alfanumeriske tegn.',
    'ConditionMessageForUppercase' => 'Adgangskoden skal indeholde et stort bogstav.',
    'ConditionMessageForLowercase' => 'Adgangskoden skal indeholde en håndskriftsgenkendelsestilstanden.',
    'ConditionMessageForDigit' => 'Adgangskoden skal indeholde et ciffer.',
    'ConditionMessageForSpecialchar' => 'Adgangskoden skal indeholde specialtegn.',
    'ConditionMessageForMinPasswordAge' => 'Adgangskoden kan opdateres fra sidst opdateret tid minimum af $min_password_age dage senere.',
    'TrustedDomains' => 'Betroede domæner',
    'SimpleRiskColumnMapping' => 'SimpleRisk kolonnetilknytning',
    'Mapping' => 'Kortlægning',
    'Optional' => 'Valgfri',
    'SaveMappingAs' => 'Gemme kortlægning som',
    'EncryptionLevel' => 'Krypteringsniveau',
    'Level' => 'Niveau',
    'Description' => 'Beskrivelse',
    'ShowRiskScoreOverTime' => 'Vis risikoscore Over tid',
    'HideRiskScoreOverTime' => 'Skjule risikoscore Over tid',
    'ReviewRegularlyHelp' => 'Nedenfor er listen over alle risici sorteret efter Unreviewed, tidligere Due og dato for næste gennemsyn',
    'RiskScoringHistory' => 'Risiko Scoring historie',
    'RiskAddPermissionMessage' => 'Du har ikke tilladelse til at indgive nye risici.  Eventuelle risici, du forsøger at indsende vil ikke blive registreret.  Kontakt venligst Administrator hvis du føler at du har nået denne meddelelse ved en fejl.',
    'SubjectRiskCannotBeEmpty' => 'Genstand for en risiko kan ikke være tom',
    'InvalidRiskID' => 'Ugyldigt risiko-ID',
    'Success' => 'Succes',
    'RiskUpdatePermissionMessage' => 'Du har ikke tilladelse til at redigere risici.  Eventuelle risici, du forsøger at ændre vil ikke blive registreret.  Kontakt venligst Administrator hvis du føler at du har nået denne meddelelse ved en fejl.',
    'RiskReviewPermission' => 'Du har ikke tilladelse til at gennemgå $risk_level niveau risici.  Eventuelle bedømmelser, som du forsøger at indsende vil ikke blive registreret.  Kontakt venligst administrator hvis du føler at du har nået denne meddelelse ved en fejl.',
    'DateAndTime' => 'Dato og klokkeslæt',
    'mCryptWarning' => 'Filtypenavnet "mcrypt" skal være installeret for kryptering ekstra til at arbejde ordentligt.  Du skal installere den til at fortsætte.',
    'APIInCompatibleWithEncryptionLevel' => 'API er ikke kompatibel med brugeren krypteringsniveau krypteret Database ekstra.',
    'UnauthenticatedAccessInAPI' => 'Ikke-godkendt adgang.  Venligst log på eller giver en nøgle for at bruge API\'EN SimpleRisk.',
    'ResetPasswordMessageInUserLevelEncryption' => 'Du kan ikke nulstille adgangskoden for denne bruger er i bruger-niveau kryptering. Venligst kontakt administrator.',
    'YouNeedToSpecifyAnIdParameter' => 'Du skal angive et ID-parameteren.',
    'NoMitigation' => 'Der er ingen angivne afbødning.',
    'NoReview' => 'Der er ingen angivne gennemgang.',
    'MysqldumpPathWasSavedSuccessfully' => 'Mysqldump sti blev gemt med succes.',
    'UnavailableMysqldumpService' => 'Der er ingen avaiable \'mysqldump\' service på serveren. Angiv absolutte mysqldump service sti.',
    'AllOpenRisksByTeamByLevel' => 'Alle åbne risici af Team af risikoniveauet',
    'Unknown' => 'Ukendt',
    'AllOwners' =>'Alle risici',
    'AllOwnersManagers' => 'Alle ejerens ledere',
    'AddNewReviewNamed' => 'Tilføje nye anmeldelse opkaldt',
    'DeleteCurrentReviewNamed' => 'Slette aktuelle anmeldelse opkaldt',
    'AddNewNextstepNamed' => 'Tilføje nye næste skridt',
    'DeleteCurrentNextstepNamed' => 'Slette aktuelle næste trin opkaldt',
    'Settings' => 'Indstillinger',
    'EnablePopupWindowsForTextBoxes' => 'Aktivere pop op-vinduer for tekstbokse',
    'PasswordNoLongerUse' => 'Denne nye adgangskode er begrænset, så du ikke længere kan bruge.  Prøv en anden adgangskode',
    'RememberTheLast' => 'RememberTheLast',
    'Passwords' => 'Adgangskoder',
    'NoOwner' => 'Ingen ejer',
    'NoOwnersManager' => 'Ingen ejere Manager',
    'RiskAverageOverTime' => 'Risiko gennemsnit Over tid',
    'AverageRiskScore' => 'Gennemsnitlige risikoscore',
    'Year' => 'År',
    'Month' => 'Måned',
    'Day' => 'Dag',
    'FilterByAffectedAsset' => 'Filtrere efter berørte aktiv',
    'RisksOpened' => 'Risici åbnet',
    'RisksClosed' => 'Risici lukket',
    'HealthCheck' => 'Sundhedstjek',
    'RequirePasswordChangeOnLogin' => 'Kræve ændring af adgangskode på login',
    'PasswordChangeRequired' => 'Du skal ændre din adgangskode, før login.',
    'LikelihoodImpact' => 'Sandsynligheden for og virkningen',
    'MitigationPercent' => 'Afbødning procent',
    'MitigationPermissionMessage' => 'Du har ikke tilladelse til at planlægge afhjælpninger.  Enhver afhjælpninger, du forsøger at indsende vil ikke blive registreret.  Kontakt venligst Administrator hvis du føler at du har nået denne meddelelse ved en fejl.',
    'ResetCustomDisplaySettings' => 'Nulstille brugerdefinerede skærmindstillinger',
    'CustomResetSuccessMessage' => 'Din brugerdefinerede skærmindstillinger blev nulstillet',
    'DefaultRiskScore' => 'Standard risikoscore',
    'AdditionalStakeholders' => 'Yderligere interessenter',
    'AllSkateholders' => 'Alle interessenter',
    'RiskIdDoesNotExist' => 'Risiko-ID findes ikke',
    'RiskTeamPermission' => 'Du er ikke medlem af holdet denne risiko tilhører',
    '' => '',
);

?>