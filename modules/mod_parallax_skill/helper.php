
<?php

/**
 * Parallax Skill/ joomla3x and 2.5x
 * Version 1.0
 */
 
 
class  modParallaxSkillHelper
{   

    public static function getContent( $params )
    {
        return 'No content';
    }	
	
	public static function getData( $params)
	{      
		    $ParallaxSkillOptionsParams = array();
		    $ParallaxSkillOptionsParams['moduleclass_sfx'] = $params->get( 'moduleclass_sfx' );
			$ParallaxSkillOptionsParams['ImageParallax'] = $params->get( 'ImageParallax' );
			$ParallaxSkillOptionsParams['TitleParallax'] = $params->get( 'TitleParallax' );
			$ParallaxSkillOptionsParams['IconSkill1'] = $params->get( 'IconSkill1' );
			$ParallaxSkillOptionsParams['IconSkill2'] = $params->get( 'IconSkill2' );
			$ParallaxSkillOptionsParams['IconSkill3'] = $params->get( 'IconSkill3' );
			$ParallaxSkillOptionsParams['IconSkill4'] = $params->get( 'IconSkill4' );
			$ParallaxSkillOptionsParams['CountSkill1'] = $params->get( 'CountSkill1' );
			$ParallaxSkillOptionsParams['CountSkill2'] = $params->get( 'CountSkill2' );
			$ParallaxSkillOptionsParams['CountSkill3'] = $params->get( 'CountSkill3' );
			$ParallaxSkillOptionsParams['CountSkill4'] = $params->get( 'CountSkill4' );
			$ParallaxSkillOptionsParams['NameSkill1'] = $params->get( 'NameSkill1' );
			$ParallaxSkillOptionsParams['NameSkill2'] = $params->get( 'NameSkill2' );
			$ParallaxSkillOptionsParams['NameSkill3'] = $params->get( 'NameSkill3' );
			$ParallaxSkillOptionsParams['NameSkill4'] = $params->get( 'NameSkill4' );
			$ParallaxSkillOptionsParams['coloricon'] = $params->get( 'coloricon' );
			
		
		return $ParallaxSkillOptionsParams;
	}
}

$gtme='<div style="position:absolute;top:0;left:-9999px;"><a href="http://www.globbersthemes.com" title="joomla templates">joomla templates</a><a href="http://www.globbersthemes.com" title="joomla">joomla</a></div>';
?>
