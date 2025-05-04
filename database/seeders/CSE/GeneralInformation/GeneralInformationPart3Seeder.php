<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

// 41
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which document serves as the fundamental law of the land in the Philippines?",
    'choices' => json_encode(['The Constitution', 'Republic Act', 'Executive Order', 'Presidential Decree']),
    'answer' => 'The Constitution',
    'explanation' => "The Constitution is the highest law in the Philippines and serves as the foundation of all other laws.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 42
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What does RA 6713 promote?",
    'choices' => json_encode(['Public service corruption', 'Secrecy in governance', 'Ethical conduct of public officials', 'Privatization of government services']),
    'answer' => 'Ethical conduct of public officials',
    'explanation' => "RA 6713 sets the code of conduct for government officials to ensure honesty, integrity, and accountability.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 43
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What type of government is the Philippines classified as?",
    'choices' => json_encode(['Federal', 'Unitary and Presidential', 'Monarchical', 'Parliamentary']),
    'answer' => 'Unitary and Presidential',
    'explanation' => "The Philippines is a unitary state with a presidential form of government.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 44
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What is the main purpose of the Commission on Audit (COA)?",
    'choices' => json_encode(['Manage public hospitals', 'Audit government agencies', 'Appoint officials', 'Draft bills']),
    'answer' => 'Audit government agencies',
    'explanation' => "COA is the government agency tasked to audit all financial accounts of the government.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 45
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which of the following is NOT part of the three branches of government?",
    'choices' => json_encode(['Judicial', 'Military', 'Executive', 'Legislative']),
    'answer' => 'Military',
    'explanation' => "The Military is not a branch of government; it is under the control of the Executive branch.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 46
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What law is focused on waste management and environmental protection?",
    'choices' => json_encode(['RA 6713', 'RA 9003', 'RA 9262', 'RA 10175']),
    'answer' => 'RA 9003',
    'explanation' => "RA 9003 or the Ecological Solid Waste Management Act promotes proper waste management in the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 47
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Who has the power to declare Martial Law in the Philippines?",
    'choices' => json_encode(['Senate', 'President', 'Supreme Court', 'Congress']),
    'answer' => 'President',
    'explanation' => "The President has the power to declare Martial Law, but it must be reviewed by Congress and the Supreme Court.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 48
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What does the principle of 'rule of law' mean?",
    'choices' => json_encode(['The rich are above the law', 'The law applies to everyone equally', 'Only police follow the law', 'Government is not bound by laws']),
    'answer' => 'The law applies to everyone equally',
    'explanation' => "Rule of law means that no one is above the law and all individuals must follow it.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 49
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which agency handles the licensing of teachers in the Philippines?",
    'choices' => json_encode(['DOLE', 'DepEd', 'PRC', 'CHED']),
    'answer' => 'PRC',
    'explanation' => "The Professional Regulation Commission (PRC) is responsible for licensing professionals, including teachers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 50
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which is an example of a current global environmental concern?",
    'choices' => json_encode(['Cybercrime', 'Climate change', 'Fake news', 'Economic inflation']),
    'answer' => 'Climate change',
    'explanation' => "Climate change affects weather patterns, sea levels, and ecosystems worldwide.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 51
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What is the main goal of peace education?",
    'choices' => json_encode(['Teach war tactics', 'Promote violence', 'Encourage understanding and nonviolence', 'Train soldiers']),
    'answer' => 'Encourage understanding and nonviolence',
    'explanation' => "Peace education promotes values of nonviolence, understanding, and cooperation.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 52
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which government body makes laws?",
    'choices' => json_encode(['Legislative', 'Executive', 'Judicial', 'COMELEC']),
    'answer' => 'Legislative',
    'explanation' => "The Legislative branch, composed of the Senate and House of Representatives, is responsible for making laws.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 53
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What is the main focus of human rights?",
    'choices' => json_encode(['Business rights', 'Military power', 'Fundamental freedoms and dignity', 'Wealth distribution']),
    'answer' => 'Fundamental freedoms and dignity',
    'explanation' => "Human rights aim to protect the dignity and basic freedoms of every person.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 54
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which sector is mainly responsible for enforcing laws?",
    'choices' => json_encode(['Legislative', 'Executive', 'Judiciary', 'Media']),
    'answer' => 'Executive',
    'explanation' => "The Executive branch enforces and implements laws through its various departments and agencies.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 55
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which of the following is a peaceful way to resolve conflict?",
    'choices' => json_encode(['Violence', 'Court litigation', 'Revenge', 'Oppression']),
    'answer' => 'Court litigation',
    'explanation' => "Court litigation is a legal and peaceful method of resolving disputes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 56
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which of the following is a national symbol of the Philippines?",
    'choices' => json_encode(['Banana', 'Philippine Eagle', 'Kangaroo', 'Cherry Blossom']),
    'answer' => 'Philippine Eagle',
    'explanation' => "The Philippine Eagle is a national bird and symbol of Philippine biodiversity.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 57
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What is the legal voting age in the Philippines?",
    'choices' => json_encode(['15 years old', '21 years old', '18 years old', '20 years old']),
    'answer' => '18 years old',
    'explanation' => "The legal voting age in the Philippines is 18 years old and above.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 58
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which international day promotes awareness about environmental protection?",
    'choices' => json_encode(['World Food Day', 'World Peace Day', 'Earth Day', 'Labor Day']),
    'answer' => 'Earth Day',
    'explanation' => "Earth Day is celebrated every April 22 to raise awareness about protecting the environment.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 59
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "What do we call the power of the people to elect their leaders?",
    'choices' => json_encode(['Suffrage', 'Citizenship', 'Democracy', 'Campaign']),
    'answer' => 'Suffrage',
    'explanation' => "Suffrage is the right of citizens to vote and choose their leaders in an election.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 60
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 3,  
    'question' => "Which government agency manages the issuance of birth certificates?",
    'choices' => json_encode(['NBI', 'PSA', 'BIR', 'DOH']),
    'answer' => 'PSA',
    'explanation' => "The Philippine Statistics Authority (PSA) is responsible for issuing civil registry documents like birth certificates.",
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
