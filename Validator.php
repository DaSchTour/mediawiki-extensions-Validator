<?php

/**
 * Initialization file for the Validator extension.
 * Extension documentation: http://www.mediawiki.org/wiki/Extension:Validator
 *
 * You will be validated. Resistance is futile.
 *
 * @file Validator.php
 * @ingroup Validator
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

/**
 * This documenation group collects source code files belonging to Validator.
 *
 * Please do not use this group name for other code.
 *
 * @defgroup Validator Validator
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

if ( version_compare( $wgVersion, '1.16c', '<' ) ) {
	die( '<b>Error:</b> This version of Validator requires MediaWiki 1.16 or above.' );
}

if ( defined( 'Validator_VERSION' ) ) {
	die( '<b>Error:</b> Tried to include Validator a second time. Please make sure you are including it before any extensions that make use of it.' );
}

define( 'Validator_VERSION', '0.5 alpha' );

// Register the internationalization file.
$wgExtensionMessagesFiles['Validator'] = dirname( __FILE__ ) . '/Validator.i18n.php';
$wgExtensionMessagesFiles['ValidatorMagic'] = dirname( __FILE__ ) . '/Validator.i18n.magic.php';

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Validator',
	'version' => Validator_VERSION,
	'author' => array( '[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:Validator',
	'descriptionmsg' => 'validator-desc',
);

$incDir = dirname( __FILE__ ) . '/includes/';

// Autoload the classes.
$wgAutoloadClasses['ValidatorHooks']				= $incDir . '../Validator.hooks.php';
$wgAutoloadClasses['ValidatorSettings']		  		= $incDir . '../Validator.settings.php';

// includes
$wgAutoloadClasses['CriterionValidationResult']  	= $incDir . 'CriterionValidationResult.php'; // Deprecated!
$wgAutoloadClasses['ItemParameterCriterion']	 	= $incDir . 'ItemParameterCriterion.php'; // Deprecated!
$wgAutoloadClasses['ItemParameterManipulation']  	= $incDir . 'ItemParameterManipulation.php'; // Deprecated!
$wgAutoloadClasses['ListParameter']			  		= $incDir . 'ListParameter.php'; // Deprecated!
$wgAutoloadClasses['ListParameterCriterion']	 	= $incDir . 'ListParameterCriterion.php'; // Deprecated!
$wgAutoloadClasses['ListParameterManipulation']  	= $incDir . 'ListParameterManipulation.php'; // Deprecated!
$wgAutoloadClasses['Param']				  			= $incDir . 'Param.php';
$wgAutoloadClasses['ParamDefinition']				= $incDir . 'ParamDefinition.php';
$wgAutoloadClasses['Parameter']				  		= $incDir . 'Parameter.php'; // Deprecated!
$wgAutoloadClasses['ParameterCriterion']		 	= $incDir . 'ParameterCriterion.php'; // Deprecated!
$wgAutoloadClasses['ParameterInput']			 	= $incDir . 'ParameterInput.php';
$wgAutoloadClasses['ParameterManipulation']	  		= $incDir . 'ParameterManipulation.php'; // Deprecated!
$wgAutoloadClasses['ParserHook']				 	= $incDir . 'ParserHook.php';
$wgAutoloadClasses['Validator']				  		= $incDir . 'Validator.php';
$wgAutoloadClasses['TopologicalSort']				= $incDir . 'TopologicalSort.php';
$wgAutoloadClasses['ValidationError']				= $incDir . 'ValidationError.php';
$wgAutoloadClasses['ValidationErrorHandler']	 	= $incDir . 'ValidationErrorHandler.php';
$wgAutoloadClasses['IParam']				  		= $incDir . 'IParam.php';
$wgAutoloadClasses['IParamDefinition']				= $incDir . 'IParamDefinition.php';

// includes/definitions
$wgAutoloadClasses['BoolParam']		 				= $incDir . 'definitions/BoolParam.php';
$wgAutoloadClasses['CharParam']		 				= $incDir . 'definitions/CharParam.php';
$wgAutoloadClasses['FloatParam']		 			= $incDir . 'definitions/FloatParam.php';
$wgAutoloadClasses['IntParam']		 				= $incDir . 'definitions/IntParam.php';
$wgAutoloadClasses['NumericParam']		 			= $incDir . 'definitions/NumericParam.php';
$wgAutoloadClasses['ParamDefinition']		 		= $incDir . 'definitions/ParamDefinition.php';
$wgAutoloadClasses['StringParam']		 			= $incDir . 'definitions/StringParam.php';
$wgAutoloadClasses['TitleParam']		 			= $incDir . 'definitions/TitleParam.php';

// Deprecated!
$wgAutoloadClasses['CriterionHasLength']		 	= $incDir . 'criteria/CriterionHasLength.php';
$wgAutoloadClasses['CriterionInArray']		   		= $incDir . 'criteria/CriterionInArray.php';
$wgAutoloadClasses['CriterionInRange']		   		= $incDir . 'criteria/CriterionInRange.php';
$wgAutoloadClasses['CriterionIsFloat']		   		= $incDir . 'criteria/CriterionIsFloat.php';
$wgAutoloadClasses['CriterionIsInteger']		 	= $incDir . 'criteria/CriterionIsInteger.php';
$wgAutoloadClasses['CriterionIsNumeric']		 	= $incDir . 'criteria/CriterionIsNumeric.php';
$wgAutoloadClasses['CriterionIsTitle']		   		= $incDir . 'criteria/CriterionIsTitle.php';
$wgAutoloadClasses['CriterionItemCount']		 	= $incDir . 'criteria/CriterionItemCount.php';
$wgAutoloadClasses['CriterionMatchesRegex']	  		= $incDir . 'criteria/CriterionMatchesRegex.php';
$wgAutoloadClasses['CriterionNotEmpty']		  		= $incDir . 'criteria/CriterionNotEmpty.php';
$wgAutoloadClasses['CriterionTrue']			  		= $incDir . 'criteria/CriterionTrue.php';
$wgAutoloadClasses['CriterionUniqueItems']	   		= $incDir . 'criteria/CriterionUniqueItems.php';

// Deprecated!
$wgAutoloadClasses['ParamManipulationBoolean']   	= $incDir . 'manipulations/ParamManipulationBoolean.php';
$wgAutoloadClasses['ParamManipulationFloat']	 	= $incDir . 'manipulations/ParamManipulationFloat.php';
$wgAutoloadClasses['ParamManipulationFunctions'] 	= $incDir . 'manipulations/ParamManipulationFunctions.php';
$wgAutoloadClasses['ParamManipulationImplode']   	= $incDir . 'manipulations/ParamManipulationImplode.php';
$wgAutoloadClasses['ParamManipulationInteger']   	= $incDir . 'manipulations/ParamManipulationInteger.php';
$wgAutoloadClasses['ParamManipulationString']		= $incDir . 'manipulations/ParamManipulationString.php';
$wgAutoloadClasses['ParamManipulationTitle']	 	= $incDir . 'manipulations/ParamManipulationTitle.php';

$wgAutoloadClasses['ValidatorDescribe']		  		= $incDir . 'parserHooks/Validator_Describe.php';
$wgAutoloadClasses['ValidatorListErrors']			= $incDir . 'parserHooks/Validator_ListErrors.php';
unset( $incDir );

# Registration of the listerrors parser hooks.
$wgHooks['ParserFirstCallInit'][] = 'ValidatorListErrors::staticInit';

# Registration of the describe parser hooks.
$wgHooks['ParserFirstCallInit'][] = 'ValidatorDescribe::staticInit';

// Since 0.4.8
$wgHooks['UnitTestsList'][] = 'ValidatorHooks::registerUnitTests';



$egValidatorSettings = array();