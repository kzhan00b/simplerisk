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
    'Home'=>'Casa',
    'RiskManagement'=>'Gestão De Risco',
    'Reporting'=>'Relatórios',
    'Configure'=>'Configurar',
    'MyProfile'=>'Meu Perfil',
    'Logout'=>'Logout',
    'LogInHere'=>'Login para SimpleRisk',
    'Username'=>'Nome de usuário',
    'Password'=>'Palavra-passe',
    'ForgotYourPassword'=>'Esqueceu sua senha',
    'Login'=>'Login',
    'Reset'=>'Repor',
    'Send'=>'Enviar',
    'Update'=>'Atualização',
    'SendPasswordResetEmail'=>'Enviar E-Mail De Redefinição De Senha',
    'PasswordReset'=>'Redefinição De Senha',
    'ResetToken'=>'De Token De Redefinição De',
    'RepeatPassword'=>'Repetir Senha',
    'Submit'=>'Enviar',
    'ProfileDetails'=>'Detalhes Do Perfil',
    'LastLogin'=>'Último Login',
    'ChangePassword'=>'Alteração De Senha',
    'CurrentPassword'=>'Palavra-Passe Actual',
    'NewPassword'=>'Nova Palavra-Passe',
    'ConfirmPassword'=>'Confirmar Senha',
    'ConfigureRiskFormula'=>'Configurar Risco Fórmula',
    'ConfigureReviewSettings'=>'Configurar Definições De Revisão',
    'AddAndRemoveValues'=>'Adicionar e Remover Valores',
    'UserManagement'=>'Gerenciamento De Usuário',
    'RedefineNamingConventions'=>'Redefinir As Convenções De Nomenclatura',
    'AuditTrail'=>'Trilha De Auditoria',
    'Extras'=>'Figurantes',
    'Announcements'=>'Anúncios',
    'About'=>'Sobre',
    'Impact'=>'Impacto',
    'Likelihood'=>'Probabilidade',
    'MitigationEffort'=>'Esforço De Mitigação',
    'Change'=>'Mudança',
    'to'=>'para',
    'AddANewUser'=>'Adicionar um Novo Usuário',
    'Type'=>'Tipo',
    'FullName'=>'Nome Completo',
    'EmailAddress'=>'E-mail',
    'Teams'=>'Equipe(s)',
    'ALL'=>'TODOS',
    'NONE'=>'NENHUM',
    'UserResponsibilities'=>'Responsabilidades Do Usuário',
    'AbleToSubmitNewRisks'=>'Capaz de Apresentar Novos Riscos',
    'AbleToModifyExistingRisks'=>'Capaz de Modificar os Riscos Existentes',
    'AbleToCloseRisks'=>'Capaz de Fechar os Riscos',
    'AbleToPlanMitigations'=>'Capaz de Planejar Reduções de',
    'AbleToReviewLowRisks'=>'Capaz de analisar os Riscos Baixos',
    'AbleToReviewMediumRisks'=>'Capaz de analisar Riscos Médios',
    'AbleToReviewHighRisks'=>'Capaz de Rever de Alto risco',
    'AllowAccessToConfigureMenu'=>'Permitir o Acesso ao "configure" (Configurar) do Menu',
    'MultiFactorAuthentication'=>'Autenticação de vários fatores',
    'None'=>'Nenhum',
    'Add'=>'Adicionar',
    'ViewDetailsForUser'=>'Ver Detalhes do Usuário',
    'DetailsForUser'=>'Detalhes do Usuário',
    'Select'=>'Selecione',
    'EnableAndDisableUsers'=>'Habilitar e Desabilitar Usuários',
    'EnableAndDisableUsersHelp'=>'Use esta função para activar ou desactivar os logins dos usuários, mantendo a trilha de auditoria de atividades do usuário',
    'DisableUser'=>'Desativar o usuário',
    'Disable'=>'Desativar',
    'EnableUser'=>'Permitir que o usuário',
    'Enable'=>'Activar',
    'DeleteAnExistingUser'=>'Excluir um Usuário Existente',
    'DeleteCurrentUser'=>'Excluir usuário atual',
    'Delete'=>'Apagar',
    'SendPasswordResetEmailForUser'=>'Enviar de redefinição de senha e-mail para o usuário',
    'Category'=>'Categoria',
    'AddNewCategoryNamed'=>'Adicionar nova categoria chamada',
    'DeleteCurrentCategoryNamed'=>'Excluir atual categoria chamada',
    'Team'=>'Equipa',
    'AddNewTeamNamed'=>'Adicionar novo time chamado',
    'DeleteCurrentTeamNamed'=>'Excluir equipe atual nome',
    'Technology'=>'Tecnologia',
    'AddNewTechnologyNamed'=>'Adicionar uma nova tecnologia chamada',
    'DeleteCurrentTechnologyNamed'=>'Excluir atual tecnologia denominada de',
    'SiteLocation'=>'Site/Localização',
    'AddNewSiteLocationNamed'=>'Adicionar novo site/local chamado',
    'DeleteCurrentSiteLocationNamed'=>'Excluir atual sítio/local chamado',
    'ControlRegulation'=>'Regulamento De Controlo De',
    'AddNewControlRegulationNamed'=>'Adicionar novo regulamento de controlo de chamada',
    'DeleteCurrentControlRegulationNamed'=>'Excluir atual regulamento de controlo de chamada',
    'RiskPlanningStrategy'=>'Risco De Estratégia De Planejamento',
    'AddNewRiskPlanningStrategyNamed'=>'Adicionar novo risco, planejamento de estratégia chamado',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Excluir atuais de risco e planejamento de estratégia de chamada',
    'CloseReason'=>'Fechar Razão',
    'AddNewCloseReasonNamed'=>'Adicionar novo perto razão nome',
    'DeleteCurrentCloseReasonNamed'=>'Excluir corrente fechar razão nome',
    'IWantToReviewHighRiskEvery'=>'Quero rever de ALTO risco cada',
    'IWantToReviewMediumRiskEvery'=>'Eu quero análise de risco MÉDIO a cada',
    'IWantToReviewLowRiskEvery'=>'Quero rever BAIXO risco de cada',
    'days'=>'dias',
    'MyClassicRiskFormulaIs'=>'Meu Clássico De Risco Fórmula É',
    'RISK'=>'RISCO',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Eu considero ALTO risco de ser algo maior do que',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Eu considere de risco MÉDIO para ser menos do que o acima, mas maior do que',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Eu considero BAIXO risco de ser menos do que o acima, mas maior do que',
    'HighRisk'=>'Alto Risco',
    'MediumRisk'=>'Médio Risco',
    'LowRisk'=>'Baixo Risco',
    'Irrelevant'=>'Irrelevante',
    'SubmitYourRisks'=>'Apresentar risco',
    'PlanYourMitigations'=>'Plano de mitigação',
    'PerformManagementReviews'=>'Realizar avaliações',
    'PrioritizeForProjectPlanning'=>'Plano de projetos',
    'ReviewRisksRegularly'=>'Rever regularmente',
    'DocumentANewRisk'=>'Documento um Novo Risco',
    'UseThisFormHelp'=>'Use este formulário para documentar um novo risco para consideração no Processo de Gestão de Risco',
    'Subject'=>'Assunto',
    'ExternalReferenceId'=>'Referência externa de IDENTIFICAÇÃO',
    'ControlNumber'=>'Número De Controle',
    'Owner'=>'Proprietário',
    'OwnersManager'=>'Gerente do proprietário',
    'RiskScoringMethod'=>'O Risco Do Método De Pontuação',
    'CurrentLikelihood'=>'Corrente De Probabilidade',
    'CurrentImpact'=>'Impacto Atual',
    'RiskAssessment'=>'Avaliação De Risco',
    'AdditionalNotes'=>'Notas Adicionais',
    'UNREVIEWED'=>'NÃO EXAMINADOS',
    'PASTDUE'=>'PASSADO DEVIDO',
    'ID'=>'ID',
    'Status'=>'Estado',
    'Risk'=>'Risco',
    'DaysOpen'=>'Dias Em Aberto',
    'CalculatedRisk'=>'Risco Calculado',
    'SubmittedBy'=>'Submetido Por',
    'NextReviewDate'=>'Próxima Data De Revisão',
    'CVSSRiskScoring'=>'CVSS de classificação de Risco de',
    'DREADRiskScoring'=>'PAVOR de classificação de Risco de',
    'OWASPRiskScoring'=>'OWASP de classificação de Risco de',
    'CustomRiskScoring'=>'Personalizado De Classificação De Risco De',
    'MitigationPlanningHelp'=>'Abaixo está a lista de submetido riscos que necessitam de mitigação de planejamento',
    'ManagementReviewHelp'=>'Abaixo está a lista de apresentados os riscos que exigem uma revisão da gestão',
    'Submitted'=>'Enviado',
    'MitigationPlanned'=>'Mitigação Planejado',
    'ManagementReview'=>'Revisão Pela Gestão',
    'No'=>'Nenhum',
    'Yes'=>'Sim',
    'AddAndRemoveProjects'=>'Adicionar e Remover Projetos',
    'AddAndRemoveProjectsHelp'=>'Adicionar e remover projetos, a fim de associar vários riscos juntos para a priorização',
    'AddNewProjectNamed'=>'Adicionar novo projeto chamado',
    'DeleteCurrentProjectNamed'=>'Excluir atual projeto chamado',
    'AddUnassignedRisksToProjects'=>'Adicionar Unassigned Riscos para Projetos de',
    'AddUnassignedRisksToProjectsHelp'=>'Arrastar e soltar não atribuídos riscos marcado para a consideração como um projeto para o projeto apropriado guia',
    'PrioritizeProjects'=>'Priorizar Projetos',
    'PrioritizeProjectsHelp'=>'Mover-se em torno de projetos e alterar a ordem de priorização. Uma vez terminado, não se esqueça de pressionar o botão "Atualizar" para salvar suas alterações',
    'SaveRisksToProjects'=>'Salvar Riscos para Projetos de',
    'RiskId'=>'IDENTIFICAÇÃO de riscos',
    'RiskActions'=>'Ações',
    'ReopenRisk'=>'Reabrir Risco',
    'CloseRisk'=>'Fechar Risco',
    'EditRisk'=>'Editar O Risco De',
    'PlanAMitigation'=>'Plano de Mitigação',
    'PerformAReview'=>'Realizar uma Análise',
    'AddAComment'=>'Adicionar um Comentário',
    'ShowRiskScoringDetails'=>'Risco de ver os detalhes de Pontuação',
    'HideRiskScoringDetails'=>'Ocultar De Classificação De Risco Detalhes',
    'Details'=>'Detalhes',
    'SubmissionDate'=>'Data De Apresentação',
    'DateSubmitted'=>'Data De Apresentação',
    'EditDetails'=>'Editar Detalhes',
    'Mitigation'=>'Mitigação',
    'MitigationDate'=>'Data de apresentação de mitigação',
    'PlanningStrategy'=>'Estratégia De Planejamento',
    'CurrentSolution'=>'Solução Atual',
    'SecurityRequirements'=>'Requisitos De Segurança',
    'SecurityRecommendations'=>'Recomendações De Segurança',
    'EditMitigation'=>'Editar Mitigação',
    'LastReview'=>'Última Revisão',
    'ReviewDate'=>'Data De Revisão',
    'Reviewer'=>'Revisor',
    'Review'=>'Revisão',
    'NextStep'=>'Próximo Passo',
    'Comments'=>'Comentários',
    'ViewAllReviews'=>'Ver Todos Os Comentários',
    'ReviewHistory'=>'Histórico De Revisão',
    'Comment'=>'Comentário',
    'ClassicRiskScoring'=>'Clássico De Classificação De Risco De',
    'RiskScoringActions'=>'De Classificação De Risco De Ações',
    'UpdateClassicScore'=>'Atualização Clássico Pontuação',
    'ScoreBy'=>'Pontuação por',
    'RISKClassicExp1'=>'RISCO = ( Probabilidade x Impacto + 2(Impacto) )',
    'RISKClassicExp2'=>'RISCO = ( Probabilidade x Impacto + Impacto )',
    'RISKClassicExp3'=>'RISCO = ( Probabilidade x Impacto )',
    'RISKClassicExp4'=>'RISCO = ( Probabilidade x Impacto + Probabilidade )',
    'RISKClassicExp5'=>'RISCO = ( Probabilidade x Impacto + 2(Probabilidade) )',
    'Reason'=>'Razão',
    'CloseOutInformation'=>'Informação',
    'SubmitManagementReview'=>'Enviar Revisão Pela Gestão',
    'SubmitRiskMitigation'=>'Enviar Mitigação De Riscos',
    'RiskDashboard'=>'Risco De Painel',
    'RiskTrend'=>'Risco De Tendência',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Tudo abertos riscos atribuídos a mim',
    'AllOpenRisksByRiskLevel'=>'Abrir todos os Riscos por Nível de Risco',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Abrir todos os Riscos Considerados para os Projetos por Nível de Risco',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Abrir todos os Riscos Aceitos, Até a Próxima Revisão por Nível de Risco',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Abrir todos os Riscos para Apresentar como um Problema de Produção por Nível de Risco',
    'AllOpenRisksByScoringMethod'=>'Abrir todos os Riscos pelo Método de Pontuação',
    'AllClosedRisksByRiskLevel'=>'Todas Fechadas Riscos por Nível de Risco',
    'SubmittedRisksByDate'=>'Enviado Riscos Por Data',
    'MitigationsByDate'=>'Atenuações Por Data',
    'ManagementReviewsByDate'=>'Gerenciamento De Revisões Por Data',
    'ProjectsAndRisksAssigned'=>'Projetos e Riscos Atribuídos',
    'OpenRisks'=>'Abrir Riscos',
    'ClosedRisks'=>'Fechado Riscos',
    'ReportMyOpenHelp'=>'Este relatório mostra abrir todos os riscos que o usuário atual como proprietário ou gerente associado com o risco ordenar por nível de risco',
    'ReportOpenHelp'=>'Este relatório mostra todos os abrir riscos ordenar por nível de risco',
    'ReportProjectsHelp'=>'Este relatório mostra todos os abrir riscos considerados para projetos ordenados por nível de risco',
    'ReportNextReviewHelp'=>'Este relatório mostra todos abrir os riscos aceitos, até a próxima revisão ordenar por nível de risco',
    'ReportProductionIssuesHelp'=>'Este relatório mostra todos abrir os riscos apresentados como problemas de produção ordenar por nível de risco',
    'ReportRiskScoringHelp'=>'Este relatório mostra todos os riscos métodos de pontuação e os riscos classificados utilizando cada',
    'ReportClosedHelp'=>'Este relatório mostra todos os fechada riscos ordenar por nível de risco',
    'ReportSubmittedByDateHelp'=>'Este relatório mostra todos os riscos ordenar por data de apresentação',
    'ReportMitigationsByDateHelp'=>'Este relatório mostra todas as atenuações planejada, ordenada por data de mitigação',
    'ReportMgmtReviewsByDateHelp'=>'Este relatório mostra todas as revisões de gerenciamento ordenar por data de revisão',
    'ReportProjectsAndRisksHelp'=>'Este relatório mostra todos os projectos e os riscos a eles atribuída',
    'Language'=>'Idioma',
    'AllOpenRisksNeedingReview'=>'Abrir todos os Riscos que necessitam de uma Revisão',
    'ReportReviewNeededHelp'=>'Este relatório mostra todos abrir os riscos que necessitam de uma revisão pela gestão',
    'CustomValue'=>'Valor Personalizado',
    'ClosedRisksByDate'=>'Fechado Riscos Por Data',
    'DateClosed'=>'Data Fechada',
    'ClosedBy'=>'Fechado Por',
    'ReportClosedByDateHelp'=>'Este relatório mostra todos os riscos ordenar por data de encerramento',
    'AllOpenRisksByTeam'=>'Abrir todos os Riscos por Equipe',
    'ReportRiskTeamsHelp'=>'Este relatório mostra todas as equipes e os riscos atribuídos a cada',
    'Unassigned'=>'Não atribuídos',
    'AllOpenRisksByTechnology'=>'Abrir Todos Os Riscos Pela Tecnologia',
    'ReportRiskTechnologiesHelp'=>'Este relatório mostra todas as tecnologias e os riscos atribuídos a cada',
    'RiskLevel'=>'Nível De Risco',
    'BasedOnTheCurrentRiskScore'=>'Com base na sua pontuação de risco, será sua próxima data de revisão ',
    'WouldYouLikeToUseADifferentDate'=>'Você gostaria de usar uma data diferente em vez disso?',
    'RisksOpenedAndClosedOverTime'=>'Riscos Abertos e Fechados ao Longo do Tempo',
    'AllRiskScoresAreAdjusted'=>'Tudo o escore de risco são ajustados para caber em uma escala de 0 a 10.',
    'DetermineProjectStatus'=>'Determinar O Status Do Projeto',
    'ProjectStatusHelp'=>'Colocar projetos em segmentos com base no seu status atual.',
    'ActiveProjects'=>'Projetos Ativos',
    'OnHoldProjects'=>'Em Espera Projetos',
    'CompletedProjects'=>'Projetos Concluídos',
    'CancelledProjects'=>'Cancelado Projetos',
    'UpdateProjectStatuses'=>'Atualização De Status Do Projeto',
    'HighRiskReport'=>'Alto Risco De Relatório',
    'TotalOpenRisks'=>'Total De Abrir Riscos',
    'TotalHighRisks'=>'Total De Altos Riscos',
    'HighRiskPercentage'=>'Alta Percentagem De Riscos',
    'UpdateClassicScore'=>'Atualização de Pontuação clássico',
    'CurrentLikelihood'=>'Probabilidade atual',
    'CurrentImpact'=>'Impacto atual',   
    'UpdateCVSSScore'=>'Atualização de Pontuação CVSS',
    'BaseScoreMetrics'=>'A Pontuação Base De Métricas',
    'AttackVector'=>'Vetor De Ataque',
    'AttackComplexity'=>'Ataque Complexidade',
    'Authentication'=>'Autenticação',
    'ConfidentialityImpact'=>'Confidencialidade Impacto',
    'IntegrityImpact'=>'Integridade Impacto',
    'AvailabilityImpact'=>'O Impacto De Disponibilidade',
    'TemporalScoreMetrics'=>'Temporal Pontuação Métricas',
    'Exploitability'=>'Exploração',
    'RemediationLevel'=>'Remediação De Nível',
    'ReportConfidence'=>'Relatório Confiança',
    'EnvironmentalScoreMetrics'=>'Ambiental Pontuação Métricas',
    'CollateralDamagePotential'=>'Danos Colaterais Potenciais',
    'TargetDistribution'=>'De Distribuição De Destino',
    'ConfidentialityRequirement'=>'Requisito De Confidencialidade',
    'IntegrityRequirement'=>'Integridade Requisito',
    'AvailabilityRequirement'=>'Requisito De Disponibilidade',
    'UpdateDREADScore'=>'Atualização de DREAD Pontuação',
    'DamagePotential'=>'Potencial De Dano',
    'Reproducibility'=>'A reprodutibilidade',
    'AffectedUsers'=>'Os Usuários Afetados',
    'Discoverability'=>'A descoberta',
    'UpdateOWASPScore'=>'Atualização OWASP Pontuação',
    'ThreatAgentFactors'=>'Ameaça De Agente De Fatores',
    'SkillLevel'=>'Nível De Habilidade',
    'Motive'=>'Motivo',
    'Opportunity'=>'Oportunidade',
    'Size'=>'Tamanho',
    'VulnerabilityFactors'=>'Factores De Vulnerabilidade',
    'EaseOfDiscovery'=>'Facilidade de Descoberta',
    'EaseOfExploit'=>'Facilidade de Explorar',
    'Awareness'=>'Consciência',
    'IntrusionDetection'=>'Detecção De Intrusão',
    'TechnicalImpact'=>'Técnico De Impacto',
    'LossOfConfidentiality'=>'Perda de Confidencialidade',
    'LossOfIntegrity'=>'A perda da Integridade',
    'LossOfAvailability'=>'Perda de Disponibilidade',
    'LossOfAccountability'=>'Perda de prestação de contas',
    'BusinessImpact'=>'Impacto No Negócio',
    'FinancialDamage'=>'Danos Financeiros',
    'ReputationDamage'=>'Danos À Reputação',
    'NonCompliance'=>'Não-Conformidade',
    'PrivacyViolation'=>'Violação De Privacidade',
    'UpdateCustomScore'=>'Atualização Personalizada Pontuação',
    'ManuallyEnteredValue'=>'Valor Inserido Manualmente',
    'ScoreByClassic'=>'Pontuação Clássico',
    'ScoreByCVSS'=>'Pontuação CVSS',
    'ScoreByDREAD'=>'Índice de DREAD',
    'ScoreByOWASP'=>'Pontuação por OWASP',
    'ScoreByCustom'=>'Pontuação por Personalizada',
    'BaseVector'=>'Base Vetorial',
    'TemporalVector'=>'Temporal Do Vetor De',
    'EnvironmentalVector'=>'Ambiental Vetor',
    'SupportingDocumentation'=>'Documentação De Apoio',
    'Import'=>'Importação',
    'Export'=>'Exportação',
    'ActivateTheImportExportExtra'=>'Ativar a Importação/Exportação Extra',
    'PrintableView'=>'De Exibição De Impressão',
    'GroupBy'=>'Grupo',
    'IncludedColumns'=>'Colunas Incluídas',
    'AllRisks'=>'Todos Os Riscos',
    'DynamicRiskReport'=>'De Risco Dinâmico De Relatório',
    'ObsoleteReports'=>'Obsoleto Relatórios',
    'Project'=>'Projeto',
    'SortBy'=>'Ordenar Por',
    'MonthSubmitted'=>'Mês Submetidos',
    'AssetManagement'=>'Gestão De Ativos',
    'AutomatedDiscovery'=>'Descoberta Automática',
    'BatchImport'=>'Lote De Importação',
    'ManageAssets'=>'Gestão De Ativos',
    'AssetValuation'=>'Avaliação De Ativos',
    'AllowAccessToAssetManagementMenu'=>'Permitir o Acesso ao "Gerenciamento de Ativos" do Menu',
    'AutomatedDiscoveryHelp'=>'Descubra tudo ao vivo endereços IP em IP introduzido gama. Ao vivo, os endereços IP serão adicionados à lista de ativos. Os formatos aceitáveis:',
    'IPRange'=>'Intervalo de IP',
    'Search'=>'Procura',
    'AddANewAsset'=>'Adicionar um Novo Ativo',
    'DeleteAnExistingAsset'=>'Excluir um Activo Existente',
    'AssetName'=>'Nome Do Ativo',
    'IPAddress'=>'Endereço IP',
    'AssetWasAddedSuccessfully'=>'Ativo foi adicionado com êxito.',
    'AssetWasDeletedSuccessfully'=>'Ativo foi excluído com êxito.',
    'ThereWasAProblemAddingTheAsset'=>'Houve um problema adicionando o ativo.',
    'ThereWasAProblemDeletingTheAsset'=>'Houve um problema excluindo o ativo.',
    'ComingSoon'=>'Em Breve',
    'ExportRisks'=>'Exportação De Riscos',
    'ExportMitigations'=>'Exportação De Atenuações',
    'ExportReviews'=>'Exportação Comentários',
    'ExportCombined'=>'Exportação Combinado',
    'MitigatedBy'=>'Mitigado Pelo',
    'MitigationId'=>'Mitigação de IDENTIFICAÇÃO',
    'ReviewId'=>'Revisão IDENTIFICAÇÃO',
    'AffectedAssets'=>'Os Bens Afectados',
    'Activate'=>'Activar',
    'DeleteRisks'=>'Eliminar Riscos',
    'DeletedRisksCannotBeRecovered'=>'Riscos Excluídos Não Podem Ser Recuperados',
    'RisksDeletedSuccessfully'=>'Risco(s) Excluído com Sucesso',
    'ThereWasAProblemDeletingTheRisk'=>'Houve um Problema de Eliminar o Risco(s)',
    'Activated'=>'ATIVADO',
    'IWantToReviewInsignificantRiskEvery'=>'Quero rever risco INSIGNIFICANTE de cada',
    'Insignificant'=>'Insignificante',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Eu considero um risco MUITO ELEVADO para ser algo maior do que',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Eu considero ALTO risco, para ser menos do que o acima, mas maior do que',
    'VeryHigh'=>'Muito Alto',
    'VeryHighRisk'=>'Risco Muito Elevado',
    'IWantToReviewVeryHighRiskEvery'=> 'Quero rever risco MUITO ELEVADO de todos',
    'AbleToReviewVeryHighRisks'=>'Capaz de analisar Muito Altos Riscos',
    'AbleToReviewInsignificantRisks'=>'Capaz de Revisão Insignificante Riscos',
    'TotalVeryHighRisks'=>'Total De Elevados Riscos',
    'VeryHighRiskPercentage'=>'Risco Muito Elevado Percentual',
    'AllTeams'=>'Todos Os Times',
    'FileUploadSettings'=>'Upload Do Arquivo De Configurações',
    'AllowedFileTypes'=>'Tipos De Ficheiro Permitidos',
    'AddNewFileTypeOf'=>'Adicionar novo tipo de arquivo de',
    'DeleteCurrentFileTypeOf'=>'Excluir tipo de arquivo atual de',
    'MaximumUploadFileSize'=>'Máximo Tamanho De Arquivo De Upload',
    'Bytes'=>'Bytes',
    'CheckAll'=>'Verifique Todos Os',
    'CheckAllRiskMgmt'=>'Verifique Todos Os Riscos Gestão',
    'CheckAllAssetMgmt'=>'Verifique Todos Os Instrumentos De Gestão',
    'CheckAllConfigure'=>'Verifique Todas Configurar',
    'MitigationTeam'=>'Equipe De Atenuação',
    'ImportRisks'=>'Importação De Riscos',
    'ImportAssets'=>'Importação De Bens',
    'AssetValue'=>'O Valor Do Activo',
    'Register'=>'Registar',
    'RegisterSimpleRisk'=>'Registar SimpleRisk',
    'RegistrationText'=>'Registrando-se SimpleRisk você estará fornecendo suas informações de contato para que você possa ser atualizado com as informações da versão mais recente e importante notificações de segurança. Suas informações nunca serão vendidas a um terceiro. Registrado instâncias também tem a capacidade de ser feito e atualizado com o clique de um botão.',
    'RegistrationInformation'=>'Informações De Registo',
    'Company'=>'Empresa',
    'JobTitle'=>'Título Do Trabalho',
    'Phone'=>'Telefone',
    'UpgradeSimpleRisk'=>'Atualização SimpleRisk',
    'UpgradeInstructions'=>'Esta seção usa a Atualização Extra. Para certificar-se de que você tem a versão mais recente, seleccione "Actualizar", re-registrar, e recarregue esta página.',
    'NoUpgradeNeeded'=>'Nenhuma atualização é necessária neste momento.',
    'BackupDatabase'=>'Cópia de segurança da base de Dados',
    'UpgradeApplication'=>'Actualizar a Aplicação',
    'UpgradeDatabase'=>'Atualizar o Banco de dados',
    'CustomExtras'=>'Personalizado Extras',
    'CustomExtrasText'=>'Seria incrível se tudo fosse livre, certo? Espero que o núcleo SimpleRisk plataforma é capaz de servir a todas as suas necessidades de gestão de riscos. Mas, se você ainda encontrar-se querendo mais funcionalidade, nós desenvolvemos uma série de "Extras", que irá fazer exatamente isso.',
    'Upgrade'=>'Atualização',
    'Install'=>'Instalar',
    'Purchase'=>'Compra',
    'PasswordPolicy'=>'Política De Palavra-Passe',
    'MinimumNumberOfCharacters'=>'Número mínimo de Caracteres',
    'RequireAlphaCharacter'=>'Exigir Carácter Alfa',
    'RequireUpperCaseCharacter'=>'Exigir Carácter Maiúsculo',
    'RequireLowerCaseCharacter'=>'Exigir De Caracteres Minúsculos',
    'RequireNumericCharacter'=>'Exigir De Caracteres Numéricos',
    'RequireSpecialCharacter'=>'Exigir Carácter Especial',
    'Enabled'=>'Habilitado',
    'RiskPyramid'=>'Risco De Pirâmide',
    'RiskPyramidDescription'=>'O risco de pirâmide acima de ajuda para mostrar a distribuição dos riscos entre os vários níveis de risco. Um top pesada pirâmide pode ser um sinal de que a sua organização está assumindo um risco muito grande.',
    'RiskAdvice'=>'Risco Conselhos',
    'AddDeleteAssets'=>'Adicionar E Eliminar Ativos',
    'EditAssets'=>'Editar Ativos',
    'AutomaticAssetValuation'=>'Automática De Avaliação Patrimonial',
    'ManualAssetValuation'=>'Manual De Avaliação Patrimonial',
    'MinimumValue'=>'Valor Mínimo',
    'MaximumValue'=>'Valor Máximo',
    'ValueRange'=>'Intervalo De Valor',
    'DefaultAssetValuation'=>'Padrão De Avaliação Patrimonial',
    'Default'=>'Padrão',
    'RisksAndAssets'=>'Riscos e Bens',
    'Report'=>'Relatório',
    'RisksByAsset'=>'Riscos de Ativos',
    'AssetsByRisk'=>'De ativos de Risco',
    'MaximumQuantitativeLoss'=>'O Máximo De Perda Quantitativa',
    'MitigationOwner'=>'Mitigação Proprietário',
    'MitigationCost'=>'A Mitigação De Custos',
    'RiskColumns'=>'Risco Colunas',
    'MitigationColumns'=>'Mitigação Colunas',
    'ReviewColumns'=>'Revisão Colunas',
    'ChangeStatus'=>'Mudanças De Estado',
    'SetRiskStatusTo'=>'Definir Status De Risco Para',
    'AddNewStatusNamed'=>'Adicionar novo estado chamado',
    'DeleteStatusNamed'=>'Excluir o status de chamado',
    'DefaultCurrencySymbol'=>'O Símbolo De Moeda Padrão',
    'DefaultValues'=>'Valores Padrão',
    'RiskSource'=>'Risco De Origem',
    'AddNewSourceNamed'=>'Adicione nova origem do nome',
    'DeleteSourceNamed'=>'Excluir origem do nome',
    'CheckAllAssessments'=>'Verifique Todas As Avaliações',
    'AllowAccessToAssessmentsMenu'=>'Permitir o Acesso a "Avaliações" do Menu',
    'Assessments'=>'Avaliações',
    'AvailableAssessments'=>'Disponível Avaliações',
    'PendingRisks'=>'Pendente Riscos',
    'CreateAssessment'=>'Crie Avaliação',
    'EditAssessment'=>'Edição De Avaliação',
    'Overview'=>'Visão geral',
    'OpenVsClosed'=>'Aberto vs. Fechado',
    'MitigatedVsUnmitigated'=>'Mitigado vs Absoluto',
    'ReviewedVsUnreviewed'=>'Revista vs Unreviewed',
    'OpenedRisks'=>'Abriu Riscos',
    'MailSettings'=>'Definições De Correio',
    'TransportAgent'=>'Agente De Transporte De',
    'FromName'=>'A Partir Do Nome',
    'FromEmail'=>'De E-Mail',
    'ReplyToName'=>'ReplyTo Nome',
    'ReplyToEmail'=>'ReplyTo E-Mail',
    'Host'=>'Acolhimento',
    'SMTPAuthentication'=>'Autenticação SMTP',
    'Encryption'=>'Criptografia',
    'Port'=>'Porta',
    'Next'=>'Próximo',
    'NewAssessmentQuestion'=>'Nova Pergunta De Avaliação',
    'Question'=>'Pergunta',
    'RiskScore'=>'Classificação De Risco',
    'SubmitRisk'=>'Apresentar Risco',
    'Answer'=>'Responder',
    'AddQuestion'=>'Adicionar Pergunta',
    'SaveAssessment'=>'Salvar Avaliação',
    'SendAssessment'=>'Enviar Avaliação',
    'DeleteAssessment'=>'Excluir Avaliação',
    'AssessmentName'=>'Avaliação Nome',
    'SendTo'=>'Enviar Para',
    'ActiveAssessments'=>'Active Avaliações',
    'SentTo'=>'Enviado Ao',
    'From'=>'A partir de',
    'Key'=>'Chave',
    'GoToSSOLoginPage'=>'Ir à página de logon SSO',
    'APIKey'=>'Chave de API',
    'GenerateAPIKey'=>'Gerar a chave de API',
    'RotateAPIKey'=>'Gire a chave de API',
    'InvalidateAPIKey'=>'Invalidar a chave de API',
    'Deactivate'=>'Desativar',
    'ImportExportExtra'=>'Importação-exportação Extra',
    'SaveDetails'=>'Salvar detalhes',
    'ClearForm'=>'Forma clara',
    'SaveMitigation'=>'Salvar a mitigação',
    'Cancel'=>'Cancelar',
    'SubmitReview'=>'Enviar comentário',
    'UnassignedRisks'=>'Riscos não atribuídos',
    'DisableRegistrationNotice'=>'Desabilitar o aviso de registo',
    'UserPolicy'=>'Diretiva de usuário',
    'UseCaseSensitiveValidationOfUsername'=>'Usar a validação de maiusculas e minúsculas do nome de usuário',
    'MitigationPlanning'=>'Data prevista de mitigação',
    'AssetDetails'=>'Detalhes de ativos',
    'RiskList'=>'Lista de risco',
    'Are you sure you want to close the risk? All changes will be lost!'=>'Tem certeza que deseja fechar o risco? Todas as alterações serão perdidas!',
    'MinimumPasswordAge' => 'Idade mínima da senha',
    'MaximumPasswordAge' => 'Idade máxima de senha',
    'MaximumAttemptsLockout' => 'Máximo de tentativas bloqueio',
    'MaximumAttemptsLockoutTime' => 'Tempo de bloqueio máximo de tentativas',
    'attempts' => 'tentativas',
    'minutes' => 'minutos',
    'AccountLockedOut' => 'Conta bloqueada',
    'AccountLockoutPolicy' => 'Diretiva de bloqueio de conta',
    'ImportExportIsDeactivated' => 'Importação e exportação é desativada',
    'PurchaseTheExtra' => 'Compra o Extra',
    'ExpandAll' => 'Expandir todos os',
    'ConditionMessageForMinChar' => 'Senha deve conter o mínimo de caracteres $min_chars.',
    'ConditionMessageForAlpha' => 'Senha deve conter um caractere alfa.',
    'ConditionMessageForUppercase' => 'Senha deve conter um caractere maiusculo.',
    'ConditionMessageForLowercase' => 'Senha deve conter um caractere minúsculo.',
    'ConditionMessageForDigit' => 'Senha deve conter um dígito.',
    'ConditionMessageForSpecialchar' => 'Senha deve conter um caractere especial.',
    'ConditionMessageForMinPasswordAge' => 'Senha pode ser actualizada de última atualização tempo o mínimo de $min_password_age dias depois.',
    'TrustedDomains' => 'Domínios confiáveis',
    'SimpleRiskColumnMapping' => 'Mapeamento de coluna SimpleRisk',
    'Mapping' => 'Mapeamento de',
    'Optional' => 'Opcional',
    'SaveMappingAs' => 'Salvar o mapeamento como',
    'EncryptionLevel' => 'Nível de criptografia',
    'Level' => 'Nível',
    'Description' => 'Descrição',
    'ShowRiskScoreOverTime' => 'Escore de risco mostrar ao longo do tempo',
    'HideRiskScoreOverTime' => 'Esconder o escore de risco ao longo do tempo',
    'ReviewRegularlyHelp' => 'Abaixo está a lista de todos os riscos classificados por Unreviewed últimos devidos e na próxima data de revisão',
    'RiskScoringHistory' => 'Risco de marcar a história',
    'RiskAddPermissionMessage' => 'Você não tem permissão para enviar novos riscos.  Riscos que você tentar enviar não serão gravados.  Entre em contato com um administrador se você sente que chegou esta mensagem de erro.',
    'SubjectRiskCannotBeEmpty' => 'O assunto de um risco não pode ser vazio',
    'InvalidRiskID' => 'ID inválido de risco',
    'Success' => 'Sucesso',
    'RiskUpdatePermissionMessage' => 'Você não tem permissão para modificar os riscos.  Riscos que você tentar modificar não serão gravados.  Entre em contato com um administrador se você sente que chegou esta mensagem de erro.',
    'RiskReviewPermission' => 'Você não tem permissão para analisar riscos de nível $risk_level.  Quaisquer comentários que você tentar enviar não serão gravados.  Entre em contato com um administrador se você sente que chegou esta mensagem de erro.',
    'DateAndTime' => 'Data e hora',
    'mCryptWarning' => 'A extensão de "mcrypt" precisa ser instalado para a criptografia Extra funcionar corretamente.  Por favor instale-o para continuar.',
    'APIInCompatibleWithEncryptionLevel' => 'A API não é compatível com o nível de criptografia do usuário do Extra de banco de dados criptografado.',
    'UnauthenticatedAccessInAPI' => 'Acesso não autenticado.  Por favor login ou fornecer uma chave para usar a API SimpleRisk.',
    'ResetPasswordMessageInUserLevelEncryption' => 'Você não pode redefinir a senha porque este usuário está na criptografia em nível de usuário. Por favor contacte o administrador.',
    'YouNeedToSpecifyAnIdParameter' => 'Você precisa especificar um parâmetro de id.',
    'NoMitigation' => 'Não há nenhuma mitigação especificada.',
    'NoReview' => 'Não há nenhuma revisão especificado.',
    'MysqldumpPathWasSavedSuccessfully' => 'Mysqldump caminho foi salvo com sucesso.',
    'UnavailableMysqldumpService' => 'Não há nenhum serviço de \'mysqldump\' avaiable no servidor. Defina o caminho do serviço absoluto mysqldump.',
    'AllOpenRisksByTeamByLevel' => 'Todos os riscos pela equipe por nível de risco',
    'Unknown' => 'Desconhecido',
    'AllOwners' =>'Todos os riscos',
    'AllOwnersManagers' => 'Gerentes do proprietário todos os',
    'AddNewReviewNamed' => 'Adicionar um novo chamado',
    'DeleteCurrentReviewNamed' => 'Excluir revisão atual chamado',
    'AddNewNextstepNamed' => 'Adicionar novo próximo passo',
    'DeleteCurrentNextstepNamed' => 'Excluir a atual etapa seguinte chamada',
    'Settings' => 'Configurações',
    'EnablePopupWindowsForTextBoxes' => 'Permitir janelas pop-up para caixas de texto',
    'PasswordNoLongerUse' => 'Esta nova senha é limitada, portanto você não pode usar.  Por favor, tente outra senha',
    'RememberTheLast' => 'RememberTheLast',
    'Passwords' => 'Senhas',
    'NoOwner' => 'Nenhum proprietário',
    'NoOwnersManager' => 'Nenhum Gerenciador de proprietários',
    'RiskAverageOverTime' => 'Média de risco ao longo do tempo',
    'AverageRiskScore' => 'Escore de risco médio',
    'Year' => 'Ano',
    'Month' => 'Mês',
    'Day' => 'Dia',
    'FilterByAffectedAsset' => 'Filtrar por ativos afetados',
    'RisksOpened' => 'Riscos abriu',
    'RisksClosed' => 'Riscos fechados',
    'HealthCheck' => 'Exame de saúde',
    'RequirePasswordChangeOnLogin' => 'Exigir a alteração de senha no login',
    'PasswordChangeRequired' => 'Você precisa alterar sua senha antes de entrar.',
    'LikelihoodImpact' => 'Probabilidade e impacto',
    'MitigationPercent' => 'Por cento de mitigação',
    'MitigationPermissionMessage' => 'Você não tem permissão para plano de reduções.  Qualquer atenuações que você tentar enviar não serão gravadas.  Entre em contato com um administrador se você sente que chegou esta mensagem de erro.',
    'ResetCustomDisplaySettings' => 'Redefinir as configurações de exibição personalizado',
    'CustomResetSuccessMessage' => 'As configurações de exibição personalizada foi redefinida com êxito',
    'DefaultRiskScore' => 'Escore de risco padrão',
    'AdditionalStakeholders' => 'Partes interessadas adicionais',
    'AllSkateholders' => 'Todas as partes interessadas',
    'RiskIdDoesNotExist' => 'Não existe risco ID',
    'RiskTeamPermission' => 'Você não é um membro da equipe que este risco pertence ao',
    '' => '',
);

?>