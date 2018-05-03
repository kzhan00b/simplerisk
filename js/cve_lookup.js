/* This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/. */

/**************************
 * FUNCTION: CHECK CVE ID *
 **************************/
function check_cve_id(fieldName, parent)
{
    var cve = $("[name="+ fieldName +"]", parent).val();
	var pattern = /cve\-\d{4}-\d{4}/i;

	// If the field is a CVE ID
	if (cve.match(pattern))
	{
		// Select the CVSS Scoring Method
		select_cvss(parent);

		// Get the CVE info
		get_cve_info(cve, parent);

		// Get the CVSS info
		get_cvss_info(cve, parent);
	}
}

/**************************
 * FUNCTION: GET CVE INFO *
 **************************/
function get_cve_info(cve, parent)
{
	$.ajax({
	    type:'GET',
	    url:'https://vfeed.simplerisk.com/?method=get_cve&id='+cve,
	    processData: true,
	    cache: true,
	    data: {},
	    dataType: 'json',
	    success: function (data) {
		    process_cve_info(data, parent);
	    }
	});
}

/*******************************
 * FUNCTION: PROCESS CVE INFO *
 *******************************/
function process_cve_info(cve_info_json, parent)
{
    // Parse out the JSON values and process them
    var url = cve_info_json[0]['url'];
//	document.getElementById('notes').value=url;
    $("[name=notes]", parent).val(url)
    
    var summary = cve_info_json[0]['summary'];
//	document.getElementById('assessment').value=summary;
    $("[name=assessment]").val(summary)
    
    var id = cve_info_json[0]['id'];
    var modified = cve_info_json[0]['modified'];
    var published = cve_info_json[0]['published'];
}

/***************************
 * FUNCTION: GET CVSS INFO *
 ***************************/
function get_cvss_info(cve, parent)
{
    $.ajax({
        type:'GET',
        url:'https://vfeed.simplerisk.com/?method=get_cvss&id='+cve,
        processData: true,
        cache: true,
        data: {},
        dataType: 'json',
        success: function (data) {
            process_cvss_info(data, parent);
        }
    });
}

/*******************************
 * FUNCTION: PROCESS CVSS INFO *
 *******************************/
function process_cvss_info(cvss_info_json, parent)
{
	// Parse out the JSON values and process them
	var access_complexity = cvss_info_json[0]['Access Complexity'];
	process_access_complexity(access_complexity, parent);
    
	var access_vector = cvss_info_json[0]['Access Vector'];
	process_access_vector(access_vector, parent);
    
	var authentication = cvss_info_json[0]['Authentication'];
	process_authentication(authentication, parent);
    
	var availability_impact = cvss_info_json[0]['Availability Impact'];
	process_availability_impact(availability_impact, parent);
    
	var base = cvss_info_json[0]['Base'];
	var confidentiality_impact = cvss_info_json[0]['Confidentiality Impact'];
	process_confidentiality_impact(confidentiality_impact, parent);
    
	var exploit = cvss_info_json[0]['Exploit'];
	var impact = cvss_info_json[0]['Impact'];
	var integrity_impact = cvss_info_json[0]['Integrity Impact'];
	process_integrity_impact(integrity_impact, parent);
}

/***************************************
 * FUNCTION: PROCESS ACCESS COMPLEXITY *
 ***************************************/
function process_access_complexity(access_complexity, parent)
{
	switch (access_complexity)
	{
		case "high":
            $("[name=AccessComplexity]", parent).val("H");
			break;
		case "medium":
            $("[name=AccessComplexity]", parent).val("M");
			break;
		case "low":
            $("[name=AccessComplexity]", parent).val("L");
			break;
	}
}

/***********************************
 * FUNCTION: PROCESS ACCESS VECTOR *
 ***********************************/
function process_access_vector(access_vector, parent)
{
    switch (access_vector)
    {
        case "local":
            $("[name=AccessVector]", parent).val("L");
            break;
        case "adjacent network":
            $("[name=AccessVector]", parent).val("A");
            break;
        case "network":
            $("[name=AccessVector]", parent).val("N");
            break;
    }
}

/************************************
 * FUNCTION: PROCESS AUTHENTICATION *
 ************************************/
function process_authentication(authentication, parent)
{
    switch (authentication)
    {
        case "none":
            $("[name=Authentication]", parent).val("N");
            break;
        case "single instance":
            $("[name=Authentication]", parent).val("S");
            break;
        case "multiple instances":
            $("[name=Authentication]", parent).val("M");
            break;
    }
}

/********************************************
 * FUNCTION: PROCESS CONFIDENTIALITY IMPACT *
 ********************************************/
function process_confidentiality_impact(confidentiality_impact, parent)
{
    switch (confidentiality_impact)
    {
        case "none":
            $("[name=ConfImpact]", parent).val("N");
            break;
        case "partial":
            $("[name=ConfImpact]", parent).val("P");
            break;
        case "complete":
            $("[name=ConfImpact]", parent).val("C");
            break;
    }
}

/**************************************
 * FUNCTION: PROCESS INTEGRITY IMPACT *
 **************************************/
function process_integrity_impact(integrity_impact, parent)
{
    switch (integrity_impact)
    {
        case "none":
            $("[name=IntegImpact]", parent).val("N");
            break;
        case "partial":
            $("[name=IntegImpact]", parent).val("P");
            break;
        case "complete":
            $("[name=IntegImpact]", parent).val("C");
            break;
    }
}

/*****************************************
 * FUNCTION: PROCESS AVAILABILITY IMPACT *
 *****************************************/
function process_availability_impact(availability_impact, parent)
{
    switch (availability_impact)
    {
        case "none":
            $("[name=AvailImpact]", parent).val("N");
            break;
        case "partial":
            $("[name=AvailImpact]", parent).val("P");
            break;
        case "complete":
            $("[name=AvailImpact]", parent).val("C");
            break;
    }
}

/*************************
 * FUNCTION: SELECT CVSS *
 *************************/
function select_cvss(parent)
{
	// Select CVSS from the Scoring Method dropdown
    var ddl = $("[name=scoring_method]", parent);
    ddl.val(2);

	// Show the CVSS scoring div
    $(".cvss-holder", parent).show();

	// Hide the other scoring divs
    $(".classic-holder", parent).hide();
    $(".dread-holder", parent).hide();
    $(".owasp-holder", parent).hide();
    $(".custom-holder", parent).hide();
    
}

/*************************
 * FUNCTION: Show/Hide Scoring elements *
 *************************/
function handleSelection(choice, parent) {
    if (choice=="1") {
        $(".classic-holder", parent).show();
        $(".cvss-holder", parent).hide();
        $(".dread-holder", parent).hide();
        $(".owasp-holder", parent).hide();
        $(".custom-holder", parent).hide();
    }
    if (choice=="2") {
        $(".classic-holder", parent).hide();
        $(".cvss-holder", parent).show();
        $(".dread-holder", parent).hide();
        $(".owasp-holder", parent).hide();
        $(".custom-holder", parent).hide();
    }
    if (choice=="3") {
        $(".classic-holder", parent).hide();
        $(".cvss-holder", parent).hide();
        $(".dread-holder", parent).show();
        $(".owasp-holder", parent).hide();
        $(".custom-holder", parent).hide();
    }
    if (choice=="4") {
        $(".classic-holder", parent).hide();
        $(".cvss-holder", parent).hide();
        $(".dread-holder", parent).hide();
        $(".owasp-holder", parent).show();
        $(".custom-holder", parent).hide();
    }
    if (choice=="5") {
        $(".classic-holder", parent).hide();
        $(".cvss-holder", parent).hide();
        $(".dread-holder", parent).hide();
        $(".owasp-holder", parent).hide();
        $(".custom-holder", parent).show();
    }
}
