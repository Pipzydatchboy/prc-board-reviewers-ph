<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

//1
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which phenomenon has compelled police organizations to cooperate internationally against transnational crime?',
    'choices'     => json_encode([
        'Globalization',
        'Urbanization',
        'Localization',
        'Privatization',
    ]),
    'answer'      => 'Globalization',
    'explanation' => 'Globalization has increased cross-border crime and necessitated international policing cooperation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which policing model emphasizes centralized command, paramilitary structure, and uniform procedures?',
    'choices'     => json_encode([
        'British model',
        'American model',
        'Asian model',
        'Community model',
    ]),
    'answer'      => 'British model',
    'explanation' => 'The British model (Peelian principles) features centralized oversight and uniform policing.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which feature is characteristic of the United States policing system?',
    'choices'     => json_encode([
        'Decentralized agencies at federal, state, and local levels',
        'Single national police force',
        'Paramilitary national gendarmerie',
        'Community-hidden patrol posts',
    ]),
    'answer'      => 'Decentralized agencies at federal, state, and local levels',
    'explanation' => 'The U.S. model is marked by multiple autonomous agencies across jurisdictions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which Asian policing innovation uses small community posts called "koban"?',
    'choices'     => json_encode([
        'Japanese model',
        'Singaporean model',
        'Indian model',
        'Chinese model',
    ]),
    'answer'      => 'Japanese model',
    'explanation' => 'Japan’s koban system places officers in neighborhood mini-stations to enhance community contact.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which force in France operates as a national paramilitary police under the Ministry of Defense?',
    'choices'     => json_encode([
        'Gendarmerie',
        'Metropolitan Police',
        'Civil Guard',
        'National Guard',
    ]),
    'answer'      => 'Gendarmerie',
    'explanation' => 'The French Gendarmerie is a militarized national police force under defense authority.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'INTERPOL is best described as which of the following?',
    'choices'     => json_encode([
        'International police organization for information sharing',
        'Regional Southeast Asian treaty body',
        'United Nations peacekeeping unit',
        'Global intelligence agency with arrest powers',
    ]),
    'answer'      => 'International police organization for information sharing',
    'explanation' => 'INTERPOL facilitates cross-border law enforcement cooperation through data exchange.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'What is the primary function of an INTERPOL Red Notice?',
    'choices'     => json_encode([
        'Request for location and arrest of a wanted person',
        'Authorization for undercover operations',
        'Issuance of international arrest warrant',
        'Report on transnational crime trends',
    ]),
    'answer'      => 'Request for location and arrest of a wanted person',
    'explanation' => 'A Red Notice is a request to law enforcement to locate and provisionally arrest individuals pending extradition.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'ASEANAPOL primarily promotes cooperation among police agencies of which region?',
    'choices'     => json_encode([
        'Southeast Asia',
        'European Union',
        'Middle East',
        'North America',
    ]),
    'answer'      => 'Southeast Asia',
    'explanation' => 'ASEANAPOL connects police forces within the Association of Southeast Asian Nations.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which activity is a core function of ASEANAPOL?',
    'choices'     => json_encode([
        'Intelligence exchange on regional threats',
        'Joint military operations',
        'Economic development planning',
        'International trade regulation',
    ]),
    'answer'      => 'Intelligence exchange on regional threats',
    'explanation' => 'ASEANAPOL facilitates sharing of crime and intelligence data among member states.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which Philippine agency serves as the National Central Bureau for INTERPOL?',
    'choices'     => json_encode([
        'PNP-INTERPOL National Central Bureau',
        'NBI Special Action Division',
        'AFP Intelligence Service',
        'Coast Guard Intelligence',
    ]),
    'answer'      => 'PNP-INTERPOL National Central Bureau',
    'explanation' => 'The PNP hosts the Philippines’ liaison office to INTERPOL for global data exchange.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'The Philippine National Police has formal treaties on mutual legal assistance with which country’s federal police?',
    'choices'     => json_encode([
        'Australia',
        'Japan',
        'India',
        'Brazil',
    ]),
    'answer'      => 'Australia',
    'explanation' => 'The PNP and Australia Federal Police have an MoU for mutual legal assistance and capacity building.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which comparative advantage has the community-oriented Japanese police model offered to the PNP?',
    'choices'     => json_encode([
        'Enhanced neighborhood liaison through community posts',
        'Paramilitary response units',
        'Intelligence fusion centers',
        'Forensic laboratories',
    ]),
    'answer'      => 'Enhanced neighborhood liaison through community posts',
    'explanation' => 'PNP adapted the koban concept to improve local community engagement and crime prevention.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Participation in UN peacekeeping missions by PNP reflects which comparative policing concept?',
    'choices'     => json_encode([
        'International operational experience sharing',
        'Domestic crime prevention',
        'Paramilitary training at home',
        'Local community policing only',
    ]),
    'answer'      => 'International operational experience sharing',
    'explanation' => 'UN missions expose PNP officers to multinational policing standards and practices.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which external agency provides regional crime data to PNP through ASEANAPOL?',
    'choices'     => json_encode([
        'FBI',
        'Europol',
        'Interpol',
        'UNODC',
    ]),
    'answer'      => 'Interpol',
    'explanation' => 'Through INTERPOL channels, ASEANAPOL member states exchange crime data regionally.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Comparative study of police systems helps PNP benchmark performance and adopt which practice?',
    'choices'     => json_encode([
        'Best practices adaptation',
        'Uniform nationalization',
        'Total privatization',
        'Isolationism',
    ]),
    'answer'      => 'Best practices adaptation',
    'explanation' => 'Analyzing other systems allows the PNP to adopt effective strategies and innovations.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which association promotes transnational cooperation against cybercrime in Asia-Pacific?',
    'choices'     => json_encode([
        'APAC Regional Cyber Collaboration',
        'ASEANAPOL Cyber Working Group',
        'Interpol Digital Task Force',
        'UN Cybersecurity Council',
    ]),
    'answer'      => 'ASEANAPOL Cyber Working Group',
    'explanation' => 'ASEANAPOL has a specialized group coordinating member states’ cybercrime efforts.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which South Asian police model emphasizes community policing similar to PNP practices?',
    'choices'     => json_encode([
        'Indian Police Service community outreach',
        'Pakistani rapid response force',
        'Bangladeshi paramilitary corps',
        'Nepalese traffic police unit',
    ]),
    'answer'      => 'Indian Police Service community outreach',
    'explanation' => 'The Indian Police Service has developed community liaison programs to improve public trust.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which Middle Eastern model uses specialized police units for community liaison and religious policing?',
    'choices'     => json_encode([
        'Saudi "Mutawa" morality police',
        'Turkish national guard',
        'Iranian traffic police',
        'UAE federal police',
    ]),
    'answer'      => 'Saudi "Mutawa" morality police',
    'explanation' => 'The Mutawa enforce religious and social norms, representing specialized community policing in Saudi Arabia.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which comparative policing metric evaluates public satisfaction across agencies?',
    'choices'     => json_encode([
        'Citizen satisfaction surveys',
        'Crime clearance rate',
        'Budget allocation per capita',
        'Number of arrests',
    ]),
    'answer'      => 'Citizen satisfaction surveys',
    'explanation' => 'Surveys provide direct feedback on police performance and inform comparative analysis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 6,
    'question'    => 'Which international framework guides police adherence to human rights standards?',
    'choices'     => json_encode([
        'UN Code of Conduct for Law Enforcement Officials',
        'Geneva Convention',
        'Hague Rules',
        'Vienna Convention',
    ]),
    'answer'      => 'UN Code of Conduct for Law Enforcement Officials',
    'explanation' => 'The UN Code outlines ethical and human rights principles for policing globally.',
    'created_at'  => $now,
    'updated_at'  => $now,
];


        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
