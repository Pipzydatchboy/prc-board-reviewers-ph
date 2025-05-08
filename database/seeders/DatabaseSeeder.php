<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Grouped seeder calls
        $this->call([
/* //CSE - NumericalAbility - ID 1
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart1Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart2Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart3Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart4Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart5Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart6Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart7Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart8Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart9Seeder::class,
	    \Database\Seeders\CSE\NumericalAbility\NumericalAbilityPart10Seeder::class,

//CSE - AnalyticalAbility - ID 2
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart1Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart2Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart3Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart4Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart5Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart6Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart7Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart8Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart9Seeder::class,
	    \Database\Seeders\CSE\AnalyticalAbility\AnalyticalAbilityPart10Seeder::class,

//CSE - GeneralInformation - ID 3
            \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart1Seeder::class,
            \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart2Seeder::class,
            \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart3Seeder::class,
	    \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart4Seeder::class,
            \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart5Seeder::class,
            \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart6Seeder::class,
            \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart7Seeder::class,
	    \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart8Seeder::class,
            \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart9Seeder::class,
	    \Database\Seeders\CSE\GeneralInformation\GeneralInformationPart10Seeder::class,

//CSE - VerbalAbility - ID 4
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart1Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart2Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart3Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart4Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart5Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart6Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart7Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart8Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart9Seeder::class,
	    \Database\Seeders\CSE\VerbalAbility\VerbalAbilityPart10Seeder::class,

//CSE - ClericalAbility - ID 5
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart1Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart2Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart3Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart4Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart5Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart6Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart7Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart8Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart9Seeder::class,
	    \Database\Seeders\CSE\ClericalAbility\ClericalAbilityPart10Seeder::class,
	    
//LET - ProfessionalEducation - ID 6
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart1Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart2Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart3Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart4Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart5Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart6Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart7Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart8Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart9Seeder::class,
		\Database\Seeders\LET\ProfessionalEducation\ProfessionalEducationPart10Seeder::class,

//LET - GeneralEducation - ID 7
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart1Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart2Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart3Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart4Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart5Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart6Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart7Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart8Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart9Seeder::class,
		\Database\Seeders\LET\GeneralEducation\GeneralEducationPart10Seeder::class, 

//LET - EarlyChildhoodEducation - ID 8
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart1Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart2Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart3Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart4Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart5Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart6Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart7Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart8Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart9Seeder::class,
		\Database\Seeders\LET\Majorship\EarlyChildhoodEducation\EarlyChildhoodEducationPart10Seeder::class,
		
//LET - SpecialNeedsEducation - ID 9
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart1Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart2Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart3Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart4Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart5Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart6Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart7Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart8Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart9Seeder::class,
		\Database\Seeders\LET\Majorship\SpecialNeedsEducation\SpecialNeedsEducationPart10Seeder::class, 
		
//LET - English - ID 10
		\Database\Seeders\LET\Majorship\English\EnglishPart1Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart2Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart3Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart4Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart5Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart6Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart7Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart8Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart9Seeder::class,
		\Database\Seeders\LET\Majorship\English\EnglishPart10Seeder::class,

//LET - Filipino - ID 11
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart1Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart2Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart3Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart4Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart5Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart6Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart7Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart8Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart9Seeder::class,
		\Database\Seeders\LET\Majorship\Filipino\FilipinoPart10Seeder::class,

//LET - Mathematics - ID 12
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart1Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart2Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart3Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart4Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart5Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart6Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart7Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart8Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart9Seeder::class,
		\Database\Seeders\LET\Majorship\Mathematics\MathematicsPart10Seeder::class,

//LET - PhysicalScience - ID 13
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart1Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart2Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart3Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart4Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart5Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart6Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart7Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart8Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart9Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalScience\PhysicalSciencePart10Seeder::class,

//LET - SocialScience - ID 14
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart1Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart2Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart3Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart4Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart5Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart6Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart7Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart8Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart9Seeder::class,
		\Database\Seeders\LET\Majorship\SocialScience\SocialSciencePart10Seeder::class, 
		
//LET - ValuesEducation - ID 15
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart1Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart2Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart3Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart4Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart5Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart6Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart7Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart8Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart9Seeder::class,
		\Database\Seeders\LET\Majorship\ValuesEducation\ValuesEducationPart10Seeder::class,

//LET - TLE- ID 16
		\Database\Seeders\LET\Majorship\TLE\TLEPart1Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart2Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart3Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart4Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart5Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart6Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart7Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart8Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart9Seeder::class,
		\Database\Seeders\LET\Majorship\TLE\TLEPart10Seeder::class,

//LET - TVTED- ID 17
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart1Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart2Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart3Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart4Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart5Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart6Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart7Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart8Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart9Seeder::class,
		\Database\Seeders\LET\Majorship\TVTED\TVTEDPart10Seeder::class,

//LET - PhysicalEducation- ID 18
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart1Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart2Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart3Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart4Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart5Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart6Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart7Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart8Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart9Seeder::class,
		\Database\Seeders\LET\Majorship\PhysicalEducation\PhysicalEducationPart10Seeder::class,

//LET - CultureAndArtsEducation- ID 19
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart1Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart2Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart3Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart4Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart5Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart6Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart7Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart8Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart9Seeder::class,
		\Database\Seeders\LET\Majorship\CultureAndArtsEducation\CultureAndArtsEducationPart10Seeder::class,

//LET - BiologicalScience- ID 20
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart1Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart2Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart3Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart4Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart5Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart6Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart7Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart8Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart9Seeder::class,
		\Database\Seeders\LET\Majorship\BiologicalScience\BiologicalSciencePart10Seeder::class, 
        
//CLE - Criminal Jurisprudence and Procedure - ID 21
         \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart1Seeder::class, 
		 \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart2Seeder::class,
		\Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart3Seeder::class, 
		 \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart4Seeder::class, 
		  \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart5Seeder::class, 
		 \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart6Seeder::class,
		 \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart7Seeder::class,
		\Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart8Seeder::class,
		 \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart9Seeder::class,  
		 \Database\Seeders\CLE\CriminalJurisprudenceAndProcedure\CriminalJurisprudenceAndProcedurePart10Seeder::class,

//CLE - LawEnforcementAdministration - ID 22
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart1Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart2Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart3Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart4Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart5Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart6Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart7Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart8Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart9Seeder::class,
		\Database\Seeders\CLE\LawEnforcementAdministration\LawEnforcementAdministrationPart10Seeder::class,

//CLE - CrimeDetectionInvestigationPrevention - ID 23
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart1Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart2Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart3Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart4Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart5Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart6Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart7Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart8Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart9Seeder::class,
		\Database\Seeders\CLE\CrimeDetectionInvestigationPrevention\CrimeDetectionInvestigationPreventionPart10Seeder::class,

//CLE - Criminalistics - ID 24
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart1Seeder::class, 
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart2Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart3Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart4Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart5Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart6Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart7Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart8Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart9Seeder::class,
		\Database\Seeders\CLE\Criminalistics\CriminalisticsPart10Seeder::class,

//CLE - Correctional Administration - ID 25
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart1Seeder::class, 
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart2Seeder::class,
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart3Seeder::class,  
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart4Seeder::class,
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart5Seeder::class,  
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart6Seeder::class, 
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart7Seeder::class,
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart8Seeder::class, 
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart9Seeder::class, 
		\Database\Seeders\CLE\CorrectionalAdministration\CorrectionalAdministrationPart10Seeder::class,  

//CLE - CriminalSociologyEthicsHumanRelations - ID 26
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart1Seeder::class,
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart2Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart3Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart4Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart5Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart6Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart7Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart8Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart9Seeder::class, 
		\Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations\CriminalSociologyEthicsHumanRelationsPart10Seeder::class, 

//MLE - ObstetricsAndGynecology - ID 27
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart1Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart2Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart3Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart4Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart5Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart6Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart7Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart8Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart9Seeder::class,
		\Database\Seeders\MLE\ObstetricsAndGynecology\ObstetricsAndGynecologyPart10Seeder::class,

//MLE - FundamentalsOfHealthCare - ID 28
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart1Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart2Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart3Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart4Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart5Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart6Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart7Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart8Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart9Seeder::class,
		\Database\Seeders\MLE\FundamentalsOfHealthCare\FundamentalsOfHealthCarePart10Seeder::class, 
		
//MLE - InfantCareAndFeeding - ID 29
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart1Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart2Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart3Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart4Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart5Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart6Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart7Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart8Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart9Seeder::class,
		\Database\Seeders\MLE\InfantCareAndFeeding\InfantCareAndFeedingPart10Seeder::class,

//MLE - PrimaryHealthCare - ID 30
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart1Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart2Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart3Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart4Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart5Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart6Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart7Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart8Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart9Seeder::class,
		\Database\Seeders\MLE\PrimaryHealthCare\PrimaryHealthCarePart10Seeder::class,

//MLE - ProfessionalGrowthAndDevelopment - ID 31
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart1Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart2Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart4Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart3Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart5Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart6Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart7Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart8Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart9Seeder::class,
		\Database\Seeders\MLE\ProfessionalGrowthAndDevelopment\ProfessionalGrowthAndDevelopmentPart10Seeder::class, 

//MTLE - ClinicalChemistry - ID 32
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart1Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart2Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart3Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart4Seeder::class,  
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart5Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart6Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart7Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart8Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart9Seeder::class,
		\Database\Seeders\MTLE\ClinicalChemistry\ClinicalChemistryPart10Seeder::class, 

//MTLE - MicrobiologyAndParasitology - ID 33
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart1Seeder::class, 
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart2Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart3Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart4Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart5Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart6Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart7Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart8Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart9Seeder::class,
		\Database\Seeders\MTLE\MicrobiologyAndParasitology\MicrobiologyAndParasitologyPart10Seeder::class,

//MTLE - Hematology - ID 34
		\Database\Seeders\MTLE\Hematology\HematologyPart1Seeder::class, 
		\Database\Seeders\MTLE\Hematology\HematologyPart2Seeder::class, 
		\Database\Seeders\MTLE\Hematology\HematologyPart3Seeder::class, 
		\Database\Seeders\MTLE\Hematology\HematologyPart4Seeder::class, 
		\Database\Seeders\MTLE\Hematology\HematologyPart5Seeder::class,
		\Database\Seeders\MTLE\Hematology\HematologyPart6Seeder::class, 
		\Database\Seeders\MTLE\Hematology\HematologyPart7Seeder::class,  
		\Database\Seeders\MTLE\Hematology\HematologyPart8Seeder::class, 
		\Database\Seeders\MTLE\Hematology\HematologyPart9Seeder::class, 
		\Database\Seeders\MTLE\Hematology\HematologyPart10Seeder::class,

//MTLE - BloodBankingAndSerology - ID 35
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart1Seeder::class, 
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart2Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart3Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart4Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart5Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart6Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart7Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart8Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart9Seeder::class,
		\Database\Seeders\MTLE\BloodBankingAndSerology\BloodBankingAndSerologyPart10Seeder::class,
		
//MTLE - ClinicalMicroscopy - ID 36
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart1Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart2Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart3Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart4Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart5Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart6Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart7Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart8Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart9Seeder::class,
		\Database\Seeders\MTLE\ClinicalMicroscopy\ClinicalMicroscopyPart10Seeder::class,

//MTLE - ClinicalMicroscopy - ID 36
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart1Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart2Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart3Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart4Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart5Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart6Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart7Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart8Seeder::class,
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart9Seeder::class,*/
		\Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws\HistopathologicTechniquesAndMTLawsPart10Seeder::class,


          /*  \Database\Seeders\SubjectsTableSeeder::class,
          \Database\Seeders\ExamsTableSeeder::class, */
             
             
        ]);


    }
}
