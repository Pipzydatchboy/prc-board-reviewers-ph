<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

        $batch = [];

// 121
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "Which branch of government is tasked to enforce the law?",
    'choices' => json_encode(['Legislative', 'Judicial', 'Executive', 'Barangay']),
    'answer' => 'Executive',
    'explanation' => "The Executive branch is responsible for enforcing the laws passed by the Legislative branch.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 122
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What does 'suffrage' mean in the context of democracy?",
    'choices' => json_encode(['Right to speak', 'Right to protest', 'Right to vote', 'Right to own land']),
    'answer' => 'Right to vote',
    'explanation' => "Suffrage refers to the right of citizens to vote in elections and choose their leaders.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 123
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is the role of the Department of Environment and Natural Resources (DENR)?",
    'choices' => json_encode(['Build roads', 'Manage healthcare', 'Protect the environment', 'Develop tourism']),
    'answer' => 'Protect the environment',
    'explanation' => "DENR is responsible for the conservation, management, and development of the environment and natural resources.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 124
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "Which agency is responsible for higher education in the Philippines?",
    'choices' => json_encode(['DepEd', 'CHED', 'TESDA', 'PRC']),
    'answer' => 'CHED',
    'explanation' => "The Commission on Higher Education (CHED) is in charge of regulating colleges and universities.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 125
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What law promotes ethical behavior among public officials and employees?",
    'choices' => json_encode(['RA 6713', 'RA 9003', 'RA 10173', 'RA 9262']),
    'answer' => 'RA 6713',
    'explanation' => "RA 6713 or the Code of Conduct and Ethical Standards promotes integrity and accountability in government service.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 126
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "Which government agency is responsible for administering elections in the Philippines?",
    'choices' => json_encode(['DSWD', 'COMELEC', 'CSC', 'DOLE']),
    'answer' => 'COMELEC',
    'explanation' => "The Commission on Elections (COMELEC) oversees and manages all elections in the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 127
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What does RA 9003 focus on?",
    'choices' => json_encode(['Education Reform', 'Solid Waste Management', 'Drug Enforcement', 'Public Safety']),
    'answer' => 'Solid Waste Management',
    'explanation' => "RA 9003 or the Ecological Solid Waste Management Act provides guidelines for proper waste management.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 128
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "Which law aims to prevent violence against women and children?",
    'choices' => json_encode(['RA 10173', 'RA 9262', 'RA 6713', 'RA 7394']),
    'answer' => 'RA 9262',
    'explanation' => "RA 9262 protects women and children from violence and abuse in various forms.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 129
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is the role of the CSC (Civil Service Commission)?",
    'choices' => json_encode(['Conduct elections', 'Hire public school teachers', 'Promote merit-based government service', 'Draft laws']),
    'answer' => 'Promote merit-based government service',
    'explanation' => "The CSC ensures fair and merit-based hiring and discipline of government employees.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 130
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "Which body ensures the government's financial transparency?",
    'choices' => json_encode(['COA', 'DOJ', 'DILG', 'CHED']),
    'answer' => 'COA',
    'explanation' => "The Commission on Audit (COA) checks and audits the financial activities of government agencies.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 131
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is one key principle of democracy?",
    'choices' => json_encode(['Rule by one', 'Rule of law', 'Rule of wealth', 'Rule by elite']),
    'answer' => 'Rule of law',
    'explanation' => "Democracy is built on the rule of law, ensuring everyone is equal before the law.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 132
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is the highest court in the Philippines?",
    'choices' => json_encode(['Court of Appeals', 'Sandiganbayan', 'Supreme Court', 'Barangay Court']),
    'answer' => 'Supreme Court',
    'explanation' => "The Supreme Court is the highest court in the country and the final arbiter of legal cases.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 133
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is the right to access clean air and water called?",
    'choices' => json_encode(['Environmental right', 'Civic duty', 'Political right', 'Humanitarian duty']),
    'answer' => 'Environmental right',
    'explanation' => "Environmental rights include the right to live in a healthy and safe environment.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 134
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What does the PRC regulate?",
    'choices' => json_encode(['Private companies', 'Barangay budgets', 'Professional licenses', 'Military ranks']),
    'answer' => 'Professional licenses',
    'explanation' => "The Professional Regulation Commission (PRC) issues licenses to professionals like teachers and nurses.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 135
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is one of the goals of peace education?",
    'choices' => json_encode(['Encourage war', 'Teach combat tactics', 'Promote conflict resolution', 'Train police officers']),
    'answer' => 'Promote conflict resolution',
    'explanation' => "Peace education teaches non-violence, understanding, and peaceful conflict resolution.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 136
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is the term for the power to make laws?",
    'choices' => json_encode(['Judiciary', 'Executive', 'Legislation', 'Administration']),
    'answer' => 'Legislation',
    'explanation' => "Legislation refers to the authority to create and pass laws.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 137
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "Which government office files charges against corrupt officials?",
    'choices' => json_encode(['COA', 'DILG', 'Ombudsman', 'DOJ']),
    'answer' => 'Ombudsman',
    'explanation' => "The Office of the Ombudsman investigates and prosecutes corrupt government officials.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 138
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What is the purpose of RA 10173?",
    'choices' => json_encode(['Protect environment', 'Provide free education', 'Protect personal data', 'Build more roads']),
    'answer' => 'Protect personal data',
    'explanation' => "RA 10173 or the Data Privacy Act protects sensitive personal information from unauthorized access.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 139
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "What day is Independence Day in the Philippines?",
    'choices' => json_encode(['July 4', 'August 21', 'June 12', 'September 21']),
    'answer' => 'June 12',
    'explanation' => "June 12 marks the declaration of independence from Spain in 1898.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 140
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 7,      
    'question' => "Which symbol stands for Filipino bravery and patriotism?",
    'choices' => json_encode(['Carabao', 'Bayanihan', 'Philippine Flag', 'Nara Tree']),
    'answer' => 'Philippine Flag',
    'explanation' => "The Philippine Flag symbolizes patriotism, courage, and the struggle for independence.",
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
