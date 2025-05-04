<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

 // 101
 $batch[] = [ 
    'subject_id' => 3, 
    'part' => 4,   
    'question' => "Which of the following is a fundamental right in the Philippine Constitution?",
    'choices' => json_encode(['Right to Privacy', 'Right to Education', 'Right to Work', 'Right to Vote']),
    'answer' => 'Right to Education',
    'explanation' => "The Philippine Constitution guarantees the right to education for all citizens as a fundamental right.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 102
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which government agency provides weather forecasts in the Philippines?",
    'choices' => json_encode(['NDRRMC', 'DOST', 'PAGASA', 'DENR']),
    'answer' => 'PAGASA',
    'explanation' => "PAGASA, under DOST, is responsible for weather forecasting and warnings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 103
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which law protects the rights of consumers in the Philippines?",
    'choices' => json_encode(['RA 9165', 'RA 7394', 'RA 6713', 'RA 9003']),
    'answer' => 'RA 7394',
    'explanation' => "RA 7394 or the Consumer Act of the Philippines protects consumer rights and welfare.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 104
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "What is the role of the Civil Service Commission (CSC)?",
    'choices' => json_encode(['Manage elections', 'Regulate private schools', 'Ensure merit-based government employment', 'Collect taxes']),
    'answer' => 'Ensure merit-based government employment',
    'explanation' => "The CSC promotes merit and integrity in hiring and managing government employees.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 105
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which of the following is NOT a basic human right?",
    'choices' => json_encode(['Right to education', 'Right to vote', 'Right to own property', 'Right to harm others']),
    'answer' => 'Right to harm others',
    'explanation' => "Harming others is a violation of others' rights and is not considered a human right.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 106
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which branch of the Philippine government has the power to interpret laws?",
    'choices' => json_encode(['Executive', 'Legislative', 'Judicial', 'Civil']),
    'answer' => 'Judicial',
    'explanation' => "The Judicial branch interprets laws and ensures they are applied properly.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 107
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "What is the purpose of environmental conservation?",
    'choices' => json_encode(['To increase population', 'To protect nature for future generations', 'To reduce taxes', 'To promote tourism']),
    'answer' => 'To protect nature for future generations',
    'explanation' => "Environmental conservation ensures the sustainable use of natural resources.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 108
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which law provides free access to government-held information?",
    'choices' => json_encode(['RA 6713', 'RA 10173', 'RA 9003', 'RA 10627']),
    'answer' => 'RA 10173',
    'explanation' => "RA 10173 or the Data Privacy Act ensures responsible handling of personal data and access to public information.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 109
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which sector of the government is responsible for making laws?",
    'choices' => json_encode(['Executive', 'Legislative', 'Judicial', 'Barangay']),
    'answer' => 'Legislative',
    'explanation' => "The Legislative branch makes laws and consists of the Senate and House of Representatives.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 110
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "What does 'Philippine Eagle' symbolize?",
    'choices' => json_encode(['War', 'Peace', 'Freedom and Strength', 'Unity']),
    'answer' => 'Freedom and Strength',
    'explanation' => "The Philippine Eagle represents strength, courage, and freedom—qualities of the Filipino nation.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 111
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Who approves the national budget in the Philippines?",
    'choices' => json_encode(['Supreme Court', 'Congress', 'President', 'COA']),
    'answer' => 'Congress',
    'explanation' => "The Philippine Congress reviews, amends, and approves the annual national budget.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 112
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "What is the term of a Philippine Senator?",
    'choices' => json_encode(['3 years', '4 years', '5 years', '6 years']),
    'answer' => '6 years',
    'explanation' => "Senators serve for 6 years in the Philippine Congress.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 113
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which of the following is a responsibility of Filipino citizens?",
    'choices' => json_encode(['To obey traffic rules', 'To hold public office', 'To migrate abroad', 'To own a business']),
    'answer' => 'To obey traffic rules',
    'explanation' => "Following laws such as traffic rules is a civic duty of every Filipino.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 114
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which of these agencies is NOT part of the constitutional commissions?",
    'choices' => json_encode(['COA', 'COMELEC', 'CSC', 'DSWD']),
    'answer' => 'DSWD',
    'explanation' => "The DSWD is a government department but not a constitutional commission.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 115
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which of the following best describes good governance?",
    'choices' => json_encode(['Power abuse', 'Transparency and accountability', 'Corruption', 'Favoritism']),
    'answer' => 'Transparency and accountability',
    'explanation' => "Good governance ensures that leaders are honest, accountable, and transparent.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 116
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "What is the role of CHED?",
    'choices' => json_encode(['Manages barangay affairs', 'Handles higher education', 'Issues driver’s licenses', 'Provides health services']),
    'answer' => 'Handles higher education',
    'explanation' => "The Commission on Higher Education (CHED) is in charge of tertiary or higher education in the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 117
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which government agency handles drug enforcement?",
    'choices' => json_encode(['DOJ', 'NBI', 'PDEA', 'DOLE']),
    'answer' => 'PDEA',
    'explanation' => "The Philippine Drug Enforcement Agency (PDEA) is the lead agency for combating illegal drugs.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 118
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "Which law is focused on data protection and privacy?",
    'choices' => json_encode(['RA 6713', 'RA 7394', 'RA 10173', 'RA 9003']),
    'answer' => 'RA 10173',
    'explanation' => "RA 10173 or the Data Privacy Act protects personal information stored and used by both public and private institutions.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 119
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "What does the Commission on Audit (COA) do?",
    'choices' => json_encode(['Create laws', 'Manage elections', 'Audit government funds', 'Write textbooks']),
    'answer' => 'Audit government funds',
    'explanation' => "COA is the agency that ensures government money is spent properly and legally.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 120
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 6,     
    'question' => "What is one reason why citizens should pay taxes?",
    'choices' => json_encode(['To gain citizenship', 'To help fund public services', 'To avoid imprisonment', 'To gain a higher salary']),
    'answer' => 'To help fund public services',
    'explanation' => "Taxes are essential for funding roads, schools, hospitals, and other public services.",
    'created_at' => now(),
    'updated_at' => now(),
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
