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
    'Home'=>'回家的',
    'RiskManagement'=>'风险管理',
    'Reporting'=>'报告',
    'Configure'=>'配置',
    'MyProfile'=>'我的档案',
    'Logout'=>'注销',
    'LogInHere'=>'登录到 SimpleRisk',
    'Username'=>'用户名',
    'Password'=>'密码',
    'ForgotYourPassword'=>'忘了你的密码',
    'Login'=>'登陆',
    'Reset'=>'重新设置',
    'Send'=>'送',
    'Update'=>'最新情况',
    'SendPasswordResetEmail'=>'把密码重置电子邮件',
    'PasswordReset'=>'密码重置',
    'ResetToken'=>'重的象征',
    'RepeatPassword'=>'重复密码',
    'Submit'=>'提交',
    'ProfileDetails'=>'简介的详细情况',
    'LastLogin'=>'上次登陆',
    'ChangePassword'=>'改变密码',
    'CurrentPassword'=>'目前的密码',
    'NewPassword'=>'新密码',
    'ConfirmPassword'=>'确认密码',
    'ConfigureRiskFormula'=>'设置危险的方式',
    'ConfigureReviewSettings'=>'配置审查的环境中',
    'AddAndRemoveValues'=>'增加和删除的价值观',
    'UserManagement'=>'用户的管理',
    'RedefineNamingConventions'=>'重新命名约定',
    'AuditTrail'=>'审计线索',
    'Extras'=>'临时演员',
    'Announcements'=>'通告',
    'About'=>'关于',
    'Impact'=>'影响',
    'Likelihood'=>'有可能',
    'MitigationEffort'=>'减轻气候变化影响努力的前列',
    'Change'=>'变化',
    'to'=>'去',
    'AddANewUser'=>'增加一个新的用户',
    'Type'=>'类型',
    'FullName'=>'全名',
    'EmailAddress'=>'电子邮件地址',
    'Teams'=>'工作队(s)',
    'ALL'=>'所有',
    'NONE'=>'都没有',
    'UserResponsibilities'=>'用户的责任',
    'AbleToSubmitNewRisks'=>'能够提出新的风险',
    'AbleToModifyExistingRisks'=>'能够改变现有的风险',
    'AbleToCloseRisks'=>'能够密切的风险',
    'AbleToPlanMitigations'=>'能够在计划的缓解',
    'AbleToReviewLowRisks'=>'审查了低风险',
    'AbleToReviewMediumRisks'=>'能够审查中的风险',
    'AbleToReviewHighRisks'=>'能够审查的高风险',
    'AllowAccessToConfigureMenu'=>'允许接触"配置"的菜单',
    'MultiFactorAuthentication'=>'多因素的认证',
    'None'=>'都没有',
    'Add'=>'增加',
    'ViewDetailsForUser'=>'为了详细的用户',
    'DetailsForUser'=>'详细的用户',
    'Select'=>'选择',
    'EnableAndDisableUsers'=>'使破坏者',
    'EnableAndDisableUsersHelp'=>'使用这一特点使或关闭用户logins同时保持审计线索的用户活动',
    'DisableUser'=>'关闭用户',
    'Disable'=>'解除',
    'EnableUser'=>'能使用户',
    'Enable'=>'使',
    'DeleteAnExistingUser'=>'删除现有的用户',
    'DeleteCurrentUser'=>'删除目前的用户',
    'Delete'=>'删除',
    'SendPasswordResetEmailForUser'=>'把密码重置电子邮件用户',
    'Category'=>'职类',
    'AddNewCategoryNamed'=>'增加新的类别叫',
    'DeleteCurrentCategoryNamed'=>'删除目前的类别叫',
    'Team'=>'小组',
    'AddNewTeamNamed'=>'增加新的小组叫',
    'DeleteCurrentTeamNamed'=>'删除目前的小组叫',
    'Technology'=>'技术',
    'AddNewTechnologyNamed'=>'增加新的技术叫',
    'DeleteCurrentTechnologyNamed'=>'删除目前的技术叫',
    'SiteLocation'=>'场地/地点',
    'AddNewSiteLocationNamed'=>'增加新的场地/地点叫',
    'DeleteCurrentSiteLocationNamed'=>'删除目前的场地/地点叫',
    'ControlRegulation'=>'管制条例',
    'AddNewControlRegulationNamed'=>'增加新的管制条例叫',
    'DeleteCurrentControlRegulationNamed'=>'删除现有的管制条例叫',
    'RiskPlanningStrategy'=>'风险战略规划',
    'AddNewRiskPlanningStrategyNamed'=>'增加新的风险的规划战略叫',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'删除目前的风险的规划战略叫',
    'CloseReason'=>'密切的原因',
    'AddNewCloseReasonNamed'=>'增加新的亲密原因叫',
    'DeleteCurrentCloseReasonNamed'=>'删除目前的密切理由叫',
    'IWantToReviewHighRiskEvery'=>'我想审查的高风险每',
    'IWantToReviewMediumRiskEvery'=>'我想审查中的风险每',
    'IWantToReviewLowRiskEvery'=>'我想要审查风险较低的每',
    'days'=>'天',
    'MyClassicRiskFormulaIs'=>'我的典型风险的公式',
    'RISK'=>'风险',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'我认为高风险将任何超过',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'我认为有中等风险可能低于上文，但更重要',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'我认为低风险可能低于上文，但更重要',
    'HighRisk'=>'高风险',
    'MediumRisk'=>'中风险',
    'LowRisk'=>'低风险',
    'Irrelevant'=>'无关紧要',
    'SubmitYourRisks'=>'提交风险',
    'PlanYourMitigations'=>'计划缓解',
    'PerformManagementReviews'=>'执行点评',
    'PrioritizeForProjectPlanning'=>'计划项目',
    'ReviewRisksRegularly'=>'定期检讨',
    'DocumentANewRisk'=>'文件a的新的风险',
    'UseThisFormHelp'=>'使用这一形式，以便在文件a的新的风险考虑的风险管理进程',
    'Subject'=>'受',
    'ExternalReferenceId'=>'外部提及的身份证',
    'ControlNumber'=>'控制数目',
    'Owner'=>'所有人',
    'OwnersManager'=>'所有者的经理',
    'RiskScoringMethod'=>'风险评分方法',
    'CurrentLikelihood'=>'目前有可能',
    'CurrentImpact'=>'当前的影响',
    'RiskAssessment'=>'风险评估',
    'AdditionalNotes'=>'附注',
    'UNREVIEWED'=>'审阅',
    'PASTDUE'=>'过去的原因',
    'ID'=>'身份证',
    'Status'=>'地位',
    'Risk'=>'风险',
    'DaysOpen'=>'天开',
    'CalculatedRisk'=>'计算风险',
    'SubmittedBy'=>'提交',
    'NextReviewDate'=>'下一个审查日期',
    'CVSSRiskScoring'=>'CVSS风险评分',
    'DREADRiskScoring'=>'可怕的风险评分',
    'OWASPRiskScoring'=>'OWASP风险评分',
    'CustomRiskScoring'=>'习惯了风险评分',
    'MitigationPlanningHelp'=>'下文的清单提交了风险，需要缓解规划',
    'ManagementReviewHelp'=>'下文的清单提交了风险，需要一个管理审查',
    'Submitted'=>'提交',
    'MitigationPlanned'=>'缓解计划',
    'ManagementReview'=>'管理审查',
    'No'=>'不是的',
    'Yes'=>'是的',
    'AddAndRemoveProjects'=>'增加和删除项目',
    'AddAndRemoveProjectsHelp'=>'增加和删除的项目，以便协理多重风险，优先次序',
    'AddNewProjectNamed'=>'增加新的项目叫',
    'DeleteCurrentProjectNamed'=>'删除目前的项目叫',
    'AddUnassignedRisksToProjects'=>'加上未分配的风险项目',
    'AddUnassignedRisksToProjectsHelp'=>'拖放未分配的风险，标志着为审议作为一个项目的适当项目账上',
    'PrioritizeProjects'=>'优先项目',
    'PrioritizeProjectsHelp'=>'动项目和变革的顺序确定优先次序。 一旦完成，不要忘了新闻发布的"最新"的按钮就可以拯救你的变化',
    'SaveRisksToProjects'=>'救风险项目',
    'RiskId'=>'冒险的身份证',
    'RiskActions'=>'行动',
    'ReopenRisk'=>'重新开放风险',
    'CloseRisk'=>'密切的风险',
    'EditRisk'=>'编辑风险',
    'PlanAMitigation'=>'计划的一个减缓',
    'PerformAReview'=>'进行审查',
    'AddAComment'=>'增加一个评论',
    'ShowRiskScoringDetails'=>'查看风险评分详细信息',
    'HideRiskScoringDetails'=>'藏起来了风险评分细节',
    'Details'=>'详细情况',
    'SubmissionDate'=>'提交日期',
    'DateSubmitted'=>'迄今提交',
    'EditDetails'=>'编辑细节',
    'Mitigation'=>'缓解',
    'MitigationDate'=>'缓解提交日期',
    'PlanningStrategy'=>'规划战略',
    'CurrentSolution'=>'目前的解决办法',
    'SecurityRequirements'=>'安全要求',
    'SecurityRecommendations'=>'安全建议',
    'EditMitigation'=>'编辑的缓解',
    'LastReview'=>'最后审查',
    'ReviewDate'=>'审查日期',
    'Reviewer'=>'审查员',
    'Review'=>'审查',
    'NextStep'=>'下一个步骤',
    'Comments'=>'评论意见',
    'ViewAllReviews'=>'认为所有的审查',
    'ReviewHistory'=>'审查历史',
    'Comment'=>'评论',
    'ClassicRiskScoring'=>'典型的风险评分',
    'RiskScoringActions'=>'风险评分的行动',
    'UpdateClassicScore'=>'更新典型的得分',
    'ScoreBy'=>'得分',
    'RISKClassicExp1'=>'风险=(有可能是x的影响+2(影响))',
    'RISKClassicExp2'=>'风险=(有可能是x的影响+影响)',
    'RISKClassicExp3'=>'风险=(有可能是x的影响)',
    'RISKClassicExp4'=>'风险=(有可能是x的影响+可能性)',
    'RISKClassicExp5'=>'风险=(有可能是x的影响+2(可能性))',
    'Reason'=>'因',
    'CloseOutInformation'=>'亲密的信息',
    'SubmitManagementReview'=>'提交管理审查',
    'SubmitRiskMitigation'=>'提出减轻风险',
    'RiskDashboard'=>'危险的跟踪仪表板',
    'RiskTrend'=>'危险的趋势',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'分配给我的所有打开风险',
    'AllOpenRisksByRiskLevel'=>'所有开风险的风险水平',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'所有公开的危险考虑对于项目的风险水平',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'所有公开接受的风险，直至下一次审查的风险水平',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'所有公开的危险提出作为生产问题的风险水平',
    'AllOpenRisksByScoringMethod'=>'所有公开的风险评分方法',
    'AllClosedRisksByRiskLevel'=>'所有关闭风险的风险水平',
    'SubmittedRisksByDate'=>'提交风险的日期',
    'MitigationsByDate'=>'缓解的约会',
    'ManagementReviewsByDate'=>'管理审查的日期',
    'ProjectsAndRisksAssigned'=>'项目和风险的分配',
    'OpenRisks'=>'开放的风险',
    'ClosedRisks'=>'关闭的危险',
    'ReportMyOpenHelp'=>'本报告表明的所有公开的危险，当前用户以所有人或管理人有关的危险命令的风险水平',
    'ReportOpenHelp'=>'本报告表明的所有公开的危险命令的风险水平',
    'ReportProjectsHelp'=>'本报告表明的所有公开的危险考虑的项目下令的风险水平',
    'ReportNextReviewHelp'=>'本报告表明的所有公开接受的风险，直至下一次审查命令的风险水平',
    'ReportProductionIssuesHelp'=>'本报告表明的所有公开的危险提出作为生产问题的命令的风险水平',
    'ReportRiskScoringHelp'=>'本报告表明的所有风险评分方法和风险分利用每',
    'ReportClosedHelp'=>'这份报告显示所有封闭的危险命令的风险水平',
    'ReportSubmittedByDateHelp'=>'本报告表明的所有风险命令的提交日期',
    'ReportMitigationsByDateHelp'=>'这份报告显示所有的缓解计划的命令受缓解日',
    'ReportMgmtReviewsByDateHelp'=>'本报告表明的所有管理审查，下令审查日期',
    'ReportProjectsAndRisksHelp'=>'本报告表明的所有项目和风险分配给他们的',
    'Language'=>'的语言',
    'AllOpenRisksNeedingReview'=>'所有公开的危险需要一个审查',
    'ReportReviewNeededHelp'=>'本报告表明的所有公开的危险需要一个管理审查',
    'CustomValue'=>'风俗的价值',
    'ClosedRisksByDate'=>'关闭风险的日期',
    'DateClosed'=>'日关闭',
    'ClosedBy'=>'闭的',
    'ReportClosedByDateHelp'=>'本报告表明的所有风险下令关闭的日期',
    'AllOpenRisksByTeam'=>'所有开风险的小组',
    'ReportRiskTeamsHelp'=>'这份报告显示所有的小队和风险分配给每个',
    'Unassigned'=>'未分配的',
    'AllOpenRisksByTechnology'=>'所有开风险的技术',
    'ReportRiskTechnologiesHelp'=>'本报告表明的所有技术和风险分配给每个',
    'RiskLevel'=>'风险级别',
    'BasedOnTheCurrentRiskScore'=>'基于你的风险评分，你下次的检讨日期将',
    'WouldYouLikeToUseADifferentDate'=>'你想使用一个不同的日期，而不是吗?',
    'RisksOpenedAndClosedOverTime'=>'风险开启和关闭时间',
    'AllRiskScoresAreAdjusted'=>'所有风险的分数进行调整以适用于0至10的规模。',
    'DetermineProjectStatus'=>'确定的项目状况',
    'ProjectStatusHelp'=>'地方项目变成一桶根据目前的状况。',
    'ActiveProjects'=>'积极的项目',
    'OnHoldProjects'=>'搁置的项目',
    'CompletedProjects'=>'已完成的项目',
    'CancelledProjects'=>'取消的项目',
    'UpdateProjectStatuses'=>'更新项目的状况',
    'HighRiskReport'=>'高风险的报告',
    'TotalOpenRisks'=>'总共开放的风险',
    'TotalHighRisks'=>'总的高风险',
    'HighRiskPercentage'=>'高风险的百分比',
    'UpdateClassicScore'=>'更新经典得分',
    'CurrentLikelihood'=>'当前的可能性',
    'CurrentImpact'=>'当前影响',   
    'UpdateCVSSScore'=>'更新CVSS分',
    'BaseScoreMetrics'=>'基地分的衡量标准',
    'AttackVector'=>'攻击向量',
    'AttackComplexity'=>'攻击复杂性',
    'Authentication'=>'认证',
    'ConfidentialityImpact'=>'保密的影响',
    'IntegrityImpact'=>'完整的影响',
    'AvailabilityImpact'=>'供应的影响',
    'TemporalScoreMetrics'=>'时间分的衡量标准',
    'Exploitability'=>'开采范围',
    'RemediationLevel'=>'补救级',
    'ReportConfidence'=>'报告的建立信任',
    'EnvironmentalScoreMetrics'=>'环境分的衡量标准',
    'CollateralDamagePotential'=>'附带损害的可能',
    'TargetDistribution'=>'目标分配',
    'ConfidentialityRequirement'=>'保密要求',
    'IntegrityRequirement'=>'完整的要求',
    'AvailabilityRequirement'=>'是否要求',
    'UpdateDREADScore'=>'更新恐怖分',
    'DamagePotential'=>'潜在破坏力',
    'Reproducibility'=>'重现性',
    'AffectedUsers'=>'受影响的用户',
    'Discoverability'=>'可发现性',
    'UpdateOWASPScore'=>'更新OWASP分',
    'ThreatAgentFactors'=>'威胁因素的探员',
    'SkillLevel'=>'技能水平',
    'Motive'=>'的动机',
    'Opportunity'=>'机会',
    'Size'=>'规模',
    'VulnerabilityFactors'=>'脆弱性因素',
    'EaseOfDiscovery'=>'容易的发现',
    'EaseOfExploit'=>'便于利用',
    'Awareness'=>'提高认识',
    'IntrusionDetection'=>'入侵探测',
    'TechnicalImpact'=>'技术的影响',
    'LossOfConfidentiality'=>'损失的保密',
    'LossOfIntegrity'=>'损失的完整性',
    'LossOfAvailability'=>'丧失供应',
    'LossOfAccountability'=>'损失的问责制',
    'BusinessImpact'=>'业务影响',
    'FinancialDamage'=>'财务损失',
    'ReputationDamage'=>'声誉损失',
    'NonCompliance'=>'不遵守情事',
    'PrivacyViolation'=>'隐私的侵犯',
    'UpdateCustomScore'=>'更新的习俗分',
    'ManuallyEnteredValue'=>'用手工输的价值',
    'ScoreByClassic'=>'分的经典',
    'ScoreByCVSS'=>'分的CVSS',
    'ScoreByDREAD'=>'分的恐惧',
    'ScoreByOWASP'=>'分的OWASP',
    'ScoreByCustom'=>'分的习俗',
    'BaseVector'=>'基地媒',
    'TemporalVector'=>'病媒的时空',
    'EnvironmentalVector'=>'环境媒介',
    'SupportingDocumentation'=>'辅助文件',
    'Import'=>'进口',
    'Export'=>'出口',
    'ActivateTheImportExportExtra'=>'启动的进口/出口额外',
    'PrintableView'=>'可打印的认为',
    'GroupBy'=>'小组由',
    'IncludedColumns'=>'包括专栏',
    'AllRisks'=>'所有风险',
    'DynamicRiskReport'=>'充满活力的风险报告',
    'ObsoleteReports'=>'过时的报告',
    'Project'=>'项目',
    'SortBy'=>'之类的',
    'MonthSubmitted'=>'一个月提交',
    'AssetManagement'=>'资产管理',
    'AutomatedDiscovery'=>'自动发现',
    'BatchImport'=>'批进口',
    'ManageAssets'=>'管理资产',
    'AssetValuation'=>'资产的估值',
    'AllowAccessToAssetManagementMenu'=>'请允许获得"资产的管理"的菜单',
    'AutomatedDiscoveryHelp'=>'发现生活的IP地址在进入IP范围。 生活的IP地址将增加的资产清单。 可以接受的形式：',
    'IPRange'=>'IP范围',
    'Search'=>'搜查',
    'AddANewAsset'=>'增加新的资产',
    'DeleteAnExistingAsset'=>'删除现有的资产',
    'AssetName'=>'资产的名字',
    'IPAddress'=>'IP地址',
    'AssetWasAddedSuccessfully'=>'资产增加了成功。',
    'AssetWasDeletedSuccessfully'=>'资产删除成功地完成。',
    'ThereWasAProblemAddingTheAsset'=>'有一个问题增加的资产。',
    'ThereWasAProblemDeletingTheAsset'=>'有一个问题删除的资产。',
    'ComingSoon'=>'很快就会来',
    'ExportRisks'=>'出口的风险',
    'ExportMitigations'=>'出口的缓解',
    'ExportReviews'=>'出口审查',
    'ExportCombined'=>'出口结合',
    'MitigatedBy'=>'减轻的',
    'MitigationId'=>'缓解身份证',
    'ReviewId'=>'审查的身份证',
    'AffectedAssets'=>'受影响的资产',
    'Activate'=>'激活',
    'DeleteRisks'=>'删除的危险',
    'DeletedRisksCannotBeRecovered'=>'删除风险无法收回的',
    'RisksDeletedSuccessfully'=>'风险(s)删除成功',
    'ThereWasAProblemDeletingTheRisk'=>'有一个问题删的风险（s)',
    'Activated'=>'启动了',
    'IWantToReviewInsignificantRiskEvery'=>'我想要审查微不足道的风险每',
    'Insignificant'=>'微不足道',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'我考虑了很高的风险将任何超过',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'我认为高风险可能低于上文，但更重要',
    'VeryHigh'=>'非常高',
    'VeryHighRisk'=>'非常高的风险',
    'IWantToReviewVeryHighRiskEvery'=> '我想审查非常高的风险每',
    'AbleToReviewVeryHighRisks'=>'审查了非常高的风险',
    'AbleToReviewInsignificantRisks'=>'审查了微不足道的风险',
    'TotalVeryHighRisks'=>'总的风险很高',
    'VeryHighRiskPercentage'=>'非常风险很高的百分比',
    'AllTeams'=>'所有小队',
    'FileUploadSettings'=>'文件上传环境',
    'AllowedFileTypes'=>'允许的档案的类型',
    'AddNewFileTypeOf'=>'增加新的档案的类型',
    'DeleteCurrentFileTypeOf'=>'删除目前的档案的类型',
    'MaximumUploadFileSize'=>'最高上载文件大小',
    'Bytes'=>'字节',
    'CheckAll'=>'检查所有',
    'CheckAllRiskMgmt'=>'检查所有风险管理',
    'CheckAllAssetMgmt'=>'看看所有的资产管理',
    'CheckAllConfigure'=>'检查所有设置',
    'MitigationTeam'=>'缓减小组',
    'ImportRisks'=>'进口危险',
    'ImportAssets'=>'进口的资产',
    'AssetValue'=>'资产的价值',
    'Register'=>'登记册',
    'RegisterSimpleRisk'=>'登记册SimpleRisk',
    'RegistrationText'=>'通过登记SimpleRisk你们将提供你的联络信息所以你可以不断更新最新的资料和重要的安全通知。 你将永远被出售给第三方。 登记的情况下也有能力支持和进行升级，需按一下按钮。',
    'RegistrationInformation'=>'登记资料',
    'Company'=>'公司',
    'JobTitle'=>'工作权',
    'Phone'=>'电话',
    'UpgradeSimpleRisk'=>'提高SimpleRisk',
    'UpgradeInstructions'=>'本节所使用的升级的额外的。 确保你们有没有最新版本的选择"的最新情况"，重新登记和重新装弹页。',
    'NoUpgradeNeeded'=>'没有升级是必要的。',
    'BackupDatabase'=>'备用的数据库',
    'UpgradeApplication'=>'升级的适用',
    'UpgradeDatabase'=>'更新的数据库',
    'CustomExtras'=>'习俗的临时演员',
    'CustomExtrasText'=>'那将是太棒了如果一切都是免费的，对吧？ 希望的核心SimpleRisk纲要》能够成你所有的风险管理的需要。 但如果你发现自己仍有希望得到更多的功能，我们已经制定了一系列的"额外"，将做到这一点。',
    'Upgrade'=>'升级',
    'Install'=>'安装',
    'Purchase'=>'购买',
    'PasswordPolicy'=>'密码政策',
    'MinimumNumberOfCharacters'=>'最低数量的角色',
    'RequireAlphaCharacter'=>'需要烷的角色',
    'RequireUpperCaseCharacter'=>'要求员会第十二届会议的主席总结性',
    'RequireLowerCaseCharacter'=>'需要较低的案件的性质',
    'RequireNumericCharacter'=>'需要的数字的角色',
    'RequireSpecialCharacter'=>'需要特别性质',
    'Enabled'=>'使',
    'RiskPyramid'=>'风险的金字塔',
    'RiskPyramidDescription'=>'风险的金字塔上有助于显示风险分布在不同的风险水平。 一头重脚轻的金字塔也可以是暗示你们的组织正在太多的风险。',
    'RiskAdvice'=>'风险意见',
    'AddDeleteAssets'=>'增加&删除的资产',
    'EditAssets'=>'编辑的资产',
    'AutomaticAssetValuation'=>'自动的资产的估值',
    'ManualAssetValuation'=>'手册的资产的估值',
    'MinimumValue'=>'最低限度的价值',
    'MaximumValue'=>'最大价值',
    'ValueRange'=>'价值范围',
    'DefaultAssetValuation'=>'违约的资产的估值',
    'Default'=>'违约',
    'RisksAndAssets'=>'风险和资产',
    'Report'=>'的报告',
    'RisksByAsset'=>'风险的资产',
    'AssetsByRisk'=>'资产的风险',
    'MaximumQuantitativeLoss'=>'最大数量的损失',
    'MitigationOwner'=>'缓解的主人',
    'MitigationCost'=>'缓解费用',
    'RiskColumns'=>'风险专栏',
    'MitigationColumns'=>'减轻的专栏',
    'ReviewColumns'=>'审查的专栏',
    'ChangeStatus'=>'改变现状',
    'SetRiskStatusTo'=>'确定风险的地位',
    'AddNewStatusNamed'=>'增加新的地位叫',
    'DeleteStatusNamed'=>'删去地位叫',
    'DefaultCurrencySymbol'=>'违货币的象征',
    'DefaultValues'=>'违约后的价值观',
    'RiskSource'=>'风险资料来源',
    'AddNewSourceNamed'=>'增加新的资料来源叫',
    'DeleteSourceNamed'=>'删除来源叫',
    'CheckAllAssessments'=>'检查所有的评估',
    'AllowAccessToAssessmentsMenu'=>'允许接触不在"评估"菜单',
    'Assessments'=>'评估',
    'AvailableAssessments'=>'现有的评估',
    'PendingRisks'=>'等待危险',
    'CreateAssessment'=>'建立评估',
    'EditAssessment'=>'编辑的评估',
    'Overview'=>'概览',
    'OpenVsClosed'=>'公开与非公开',
    'MitigatedVsUnmitigated'=>'减少与不减缓的话',
    'ReviewedVsUnreviewed'=>'审查诉Unreviewed',
    'OpenedRisks'=>'开放的风险',
    'MailSettings'=>'邮件环境下',
    'TransportAgent'=>'运输探员',
    'FromName'=>'从名字',
    'FromEmail'=>'从电子邮件',
    'ReplyToName'=>'ReplyTo的名字',
    'ReplyToEmail'=>'ReplyTo电子邮件',
    'Host'=>'东道国',
    'SMTPAuthentication'=>'SMTP认证',
    'Encryption'=>'加密的',
    'Port'=>'港口',
    'Next'=>'下',
    'NewAssessmentQuestion'=>'新的评估问题',
    'Question'=>'的问题',
    'RiskScore'=>'风险分',
    'SubmitRisk'=>'提交风险',
    'Answer'=>'答案',
    'AddQuestion'=>'增加的问题',
    'SaveAssessment'=>'拯救的评估',
    'SendAssessment'=>'派遣的评估',
    'DeleteAssessment'=>'删除的评估',
    'AssessmentName'=>'评估的名字',
    'SendTo'=>'派对',
    'ActiveAssessments'=>'积极的评估',
    'SentTo'=>'送到',
    'From'=>'从',
    'Key'=>'关键',
    'GoToSSOLoginPage'=>'转到 SSO 登录页',
    'APIKey'=>'API 密钥',
    'GenerateAPIKey'=>'生成的 API 密钥',
    'RotateAPIKey'=>'旋转的 API 密钥',
    'InvalidateAPIKey'=>'导致对 API 密钥无效',
    'Deactivate'=>'停用',
    'ImportExportExtra'=>'导入导出额外',
    'SaveDetails'=>'保存详细信息',
    'ClearForm'=>'清除表单',
    'SaveMitigation'=>'保存缓解',
    'Cancel'=>'取消',
    'SubmitReview'=>'提交的评论',
    'UnassignedRisks'=>'未分配的风险',
    'DisableRegistrationNotice'=>'禁用注册通知',
    'UserPolicy'=>'用户策略',
    'UseCaseSensitiveValidationOfUsername'=>'使用区分大小写的用户名验证',
    'MitigationPlanning'=>'计划的缓解措施日期',
    'AssetDetails'=>'资产详细信息',
    'RiskList'=>'风险列表',
    'Are you sure you want to close the risk? All changes will be lost!'=>'你确定你想要关闭的风险？所有更改将都会丢失 ！',
    'MinimumPasswordAge' => '最短密码期限',
    'MaximumPasswordAge' => '密码最长期限',
    'MaximumAttemptsLockout' => '最大尝试次数锁定',
    'MaximumAttemptsLockoutTime' => '最大尝试次数锁定时间',
    'attempts' => '尝试',
    'minutes' => '分钟',
    'AccountLockedOut' => '帐户锁定',
    'AccountLockoutPolicy' => '帐户锁定策略',
    'ImportExportIsDeactivated' => '停用导入导出',
    'PurchaseTheExtra' => '购买额外的',
    'ExpandAll' => '全部展开',
    'ConditionMessageForMinChar' => '密码应包含 $min_chars 字符的最小值。',
    'ConditionMessageForAlpha' => '密码应包含字母字符。',
    'ConditionMessageForUppercase' => '密码应包含大写字符。',
    'ConditionMessageForLowercase' => '密码应该包含小写字符。',
    'ConditionMessageForDigit' => '密码应该包含数字。',
    'ConditionMessageForSpecialchar' => '密码应该包含一个特殊字符。',
    'ConditionMessageForMinPasswordAge' => '密码可以从更新最后更新时间最少的 $min_password_age 天后。',
    'TrustedDomains' => '受信任的域',
    'SimpleRiskColumnMapping' => 'SimpleRisk 列映射',
    'Mapping' => '映射',
    'Optional' => '可选',
    'SaveMappingAs' => '保存映射为',
    'EncryptionLevel' => '加密级别',
    'Level' => '水平',
    'Description' => '描述',
    'ShowRiskScoreOverTime' => '随着时间的推移显示风险评分',
    'HideRiskScoreOverTime' => '随着时间的推移隐藏风险评分',
    'ReviewRegularlyHelp' => '下面是所有风险按 Unreviewed，逾期的和下一个审查日期进行排序的列表',
    'RiskScoringHistory' => '风险评分历史',
    'RiskAddPermissionMessage' => '你没有权限提交新的风险。 不会记录您尝试提交任何风险。 请如果你觉得你已经到达此错误消息，与管理员联系。',
    'SubjectRiskCannotBeEmpty' => '风险的主题不能为空',
    'InvalidRiskID' => '风险 ID 无效',
    'Success' => '成功',
    'RiskUpdatePermissionMessage' => '您没有权限修改风险。 您试图修改任何风险将不会被记录。 请如果你觉得你已经到达此错误消息，与管理员联系。',
    'RiskReviewPermission' => '您没有权限查看 $risk_level 级风险。 不会记录您尝试提交任何评论。 请如果你觉得你已经到达此错误消息，与管理员联系。',
    'DateAndTime' => '日期和时间',
    'mCryptWarning' => '"Mcrypt"扩展需要安装加密额外才能正常工作。 请将其安装以继续。',
    'APIInCompatibleWithEncryptionLevel' => 'API 是不兼容的加密数据库额外的用户加密级别。',
    'UnauthenticatedAccessInAPI' => '未经身份验证的访问。 请登录或提供要使用 SimpleRisk API 密钥。',
    'ResetPasswordMessageInUserLevelEncryption' => '你不可以重置密码，因为此用户是在用户级别的加密。请与管理员联系。',
    'YouNeedToSpecifyAnIdParameter' => '您需要指定 id 参数。',
    'NoMitigation' => '没有指定的缓解。',
    'NoReview' => '没有指定的审查。',
    'MysqldumpPathWasSavedSuccessfully' => '成功保存了 Mysqldump 路径。',
    'UnavailableMysqldumpService' => '服务器上没有缴费 \'了 mysqldump\' 服务。请设置绝对了 mysqldump 服务路径。',
    'AllOpenRisksByTeamByLevel' => '所有打开的团队由风险水平风险',
    'Unknown' => '未知',
    'AllOwners' =>'所有风险',
    'AllOwnersManagers' => '所有业主经理',
    'AddNewReviewNamed' => '添加新命名的审查',
    'DeleteCurrentReviewNamed' => '删除当前审查命名',
    'AddNewNextstepNamed' => '添加新的下一步',
    'DeleteCurrentNextstepNamed' => '删除当前的下一步，名为',
    'Settings' => '设置',
    'EnablePopupWindowsForTextBoxes' => '使文本框中的弹出窗口',
    'PasswordNoLongerUse' => '这个新密码是有限的所以你不能再使用。 请尝试另一个密码',
    'RememberTheLast' => 'RememberTheLast',
    'Passwords' => '密码',
    'NoOwner' => '没有所有者',
    'NoOwnersManager' => '没有业主经理',
    'RiskAverageOverTime' => '随着时间的推移风险平均',
    'AverageRiskScore' => '平均风险评分',
    'Year' => '一年',
    'Month' => '个月',
    'Day' => '一天',
    'FilterByAffectedAsset' => '受影响的资产按筛选',
    'RisksOpened' => '打开的风险',
    'RisksClosed' => '关闭的风险',
    'HealthCheck' => '健康检查',
    'RequirePasswordChangeOnLogin' => '需要登录的密码更改',
    'PasswordChangeRequired' => '您需要更改您的密码，在登录之前。',
    'LikelihoodImpact' => '可能性和影响',
    'MitigationPercent' => '缓解 %',
    'MitigationPermissionMessage' => '您没有权限来计划缓解措施。 不会记录您尝试提交任何缓解。 请如果你觉得你已经到达此错误消息，与管理员联系。',
    'ResetCustomDisplaySettings' => '重置自定义显示设置',
    'CustomResetSuccessMessage' => '您的自定义显示设置已成功重置',
    'DefaultRiskScore' => '违约风险评分',
    'AdditionalStakeholders' => '其他利益相关者',
    'AllSkateholders' => '所有利益攸关者',
    'RiskIdDoesNotExist' => '风险 ID 不存在',
    'RiskTeamPermission' => '你不是这种风险属于团队的成员',
    '' => '',
);

?>
