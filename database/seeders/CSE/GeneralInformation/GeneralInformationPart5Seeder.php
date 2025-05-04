<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

 // 81
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What is the capital of the Philippines?",
    'choices' => json_encode(['Quezon City', 'Manila', 'Cebu', 'Davao']),
    'answer' => 'Manila',
    'explanation' => "Manila is the capital city of the Philippines, while Quezon City is the most populous.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 82
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Which document outlines the fundamental laws of the land?",
    'choices' => json_encode(['Civil Code', 'Bill of Rights', 'Constitution', 'Republic Act']),
    'answer' => 'Constitution',
    'explanation' => "The Constitution is the highest law in the Philippines and serves as the foundation of governance.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 83
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Which law governs ethical standards for public officials?",
    'choices' => json_encode(['RA 6713', 'RA 9003', 'RA 9165', 'RA 10918']),
    'answer' => 'RA 6713',
    'explanation' => "RA 6713 promotes ethics and accountability in public service.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 84
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What is the meaning of DENR?",
    'choices' => json_encode(['Department of Energy and Natural Resources', 'Department of Environment and Natural Resources', 'Department of Environmental Reform', 'Department of National Resources']),
    'answer' => 'Department of Environment and Natural Resources',
    'explanation' => "DENR is the government agency in charge of the environment and natural resources.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 85
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Who has the power to impeach the President?",
    'choices' => json_encode(['Senate', 'Supreme Court', 'House of Representatives', 'COMELEC']),
    'answer' => 'House of Representatives',
    'explanation' => "Only the House of Representatives can initiate the impeachment of the President.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 86
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Which agency regulates professional licenses in the Philippines?",
    'choices' => json_encode(['CHED', 'PRC', 'DOH', 'DepEd']),
    'answer' => 'PRC',
    'explanation' => "The Professional Regulation Commission (PRC) oversees licensure exams and issuance of professional licenses.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 87
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What is the importance of the Bill of Rights?",
    'choices' => json_encode(['It lists government projects', 'It promotes tourism', 'It outlines the basic rights of citizens', 'It shows the Constitution’s history']),
    'answer' => 'It outlines the basic rights of citizens',
    'explanation' => "The Bill of Rights protects citizens from abuses and guarantees fundamental freedoms.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 88
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Which law addresses solid waste management in the country?",
    'choices' => json_encode(['RA 9003', 'RA 6713', 'RA 10627', 'RA 1425']),
    'answer' => 'RA 9003',
    'explanation' => "RA 9003 or the Ecological Solid Waste Management Act promotes environmental cleanliness and proper waste disposal.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 89
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What government agency handles national statistics and civil registration?",
    'choices' => json_encode(['NBI', 'PSA', 'COA', 'DBM']),
    'answer' => 'PSA',
    'explanation' => "The Philippine Statistics Authority (PSA) handles statistical data and civil registry services like birth certificates.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 90
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What does RA 9262 aim to address?",
    'choices' => json_encode(['Drug abuse', 'Waste management', 'Violence against women and children', 'Freedom of Information']),
    'answer' => 'Violence against women and children',
    'explanation' => "RA 9262 is the Anti-Violence Against Women and Their Children Act of 2004.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 91
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Who enforces the laws passed by Congress?",
    'choices' => json_encode(['Judiciary', 'Executive', 'Legislative', 'Media']),
    'answer' => 'Executive',
    'explanation' => "The Executive branch, led by the President, implements and enforces laws.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 92
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What body checks if laws are constitutional?",
    'choices' => json_encode(['Senate', 'Supreme Court', 'President', 'Cabinet']),
    'answer' => 'Supreme Court',
    'explanation' => "The Supreme Court interprets laws and ensures they are aligned with the Constitution.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 93
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Which document is considered the foundation of Philippine democracy?",
    'choices' => json_encode(['The Penal Code', 'The Constitution', 'The Civil Code', 'The Labor Code']),
    'answer' => 'The Constitution',
    'explanation' => "The Constitution serves as the legal and political foundation of the Philippines’ democratic government.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 94
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Who has the power to veto laws in the Philippines?",
    'choices' => json_encode(['Congress', 'President', 'Chief Justice', 'Senate President']),
    'answer' => 'President',
    'explanation' => "The President can veto bills passed by Congress, preventing them from becoming law.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 95
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What is the national language of the Philippines?",
    'choices' => json_encode(['Filipino', 'English', 'Spanish', 'Bisaya']),
    'answer' => 'Filipino',
    'explanation' => "Filipino, based on Tagalog, is the national language of the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 96
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Which agency manages environmental protection?",
    'choices' => json_encode(['DENR', 'DOH', 'DPWH', 'DOT']),
    'answer' => 'DENR',
    'explanation' => "The Department of Environment and Natural Resources is tasked with protecting the country’s environment.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 97
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What day is recognized as Earth Day?",
    'choices' => json_encode(['June 5', 'April 22', 'March 8', 'May 1']),
    'answer' => 'April 22',
    'explanation' => "Earth Day is celebrated every April 22 to raise awareness on environmental protection.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 98
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "Which is NOT a power of the President?",
    'choices' => json_encode(['Appoint officials', 'Declare martial law', 'Interpret the law', 'Veto laws']),
    'answer' => 'Interpret the law',
    'explanation' => "Interpreting the law is the role of the Judicial branch, not the Executive.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 99
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What is the role of the Commission on Audit (COA)?",
    'choices' => json_encode(['Create budgets', 'Enforce laws', 'Audit public funds', 'Write bills']),
    'answer' => 'Audit public funds',
    'explanation' => "COA audits the use of public funds by government agencies to ensure transparency.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 100
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 5,    
    'question' => "What is the meaning of R.A. in Philippine laws?",
    'choices' => json_encode(['Republic Action', 'Republic Announcement', 'Republic Act', 'Rural Area']),
    'answer' => 'Republic Act',
    'explanation' => "R.A. stands for Republic Act, which is a law passed by the Philippine Congress.",
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
