<?php 
defined('C5_EXECUTE') or die("Access Denied.");

class c5DashboardGohistoryPackage extends Package 
{
	
	protected $pkgHandle = 'c5_dashboard_gohistory';
	protected $appVersionRequired = "5.4.1";
	protected $pkgVersion = "0.1.1";


	public function getPackageDescription()
	{
		return t( "History fixed for Dashboard Concrete5 " );
	}

	public function GetPackageName()
	{
		return t( "C5 Dashboard Go History v0.1" );
	}

	public function on_start()
    {
        $env = Environment::get();
        $env->overrideCoreByPackage('themes/dashboard/elements/header.php', $this);
		
    }

	public function install()
	{
		$pkg = parent::install();		
	}

  public function upgrade() {
        $pkg = $this;
        parent::upgrade();
        //$this->configurePackage($pkg);
    }
 
    public function configurePackage($pkg){

    }

	 public function uninstall() {
        parent::uninstall();
        //$this->unOverrideCoreSinglePagePackage($pkg);
    }

}

// vim: set noexpandtab ts=4 :
