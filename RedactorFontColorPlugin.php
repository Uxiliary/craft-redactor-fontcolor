<?php
namespace Craft;

class RedactorFontColorPlugin extends BasePlugin
{
	public function getName()
	{
		return 'Redactor Font Color';
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Uxiliary';
	}

	public function getDeveloperUrl()
	{
		return 'http://uxiliary.com';
	}


	public function init()
	{
		if (!craft()->isConsole())
		{
			if (craft()->request->isCpRequest())
			{
				craft()->templates->includeJsResource('redactorfontcolor/styles.js');
			}
		}
	}
}
