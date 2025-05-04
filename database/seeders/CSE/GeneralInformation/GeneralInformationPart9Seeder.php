<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart9Seeder extends Seeder
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

// 161
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which branch of government is responsible for interpreting the law?",
    'choices' => json_encode(['Executive', 'Legislative', 'Judicial', 'Civil']),
    'answer' => 'Judicial',
    'explanation' => "The Judicial branch, headed by the Supreme Court, interprets the laws of the land.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 162
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which of the following is protected under the Bill of Rights?",
    'choices' => json_encode(['Right to vote only', 'Right to get rich', 'Freedom of speech', 'Freedom to disobey laws']),
    'answer' => 'Freedom of speech',
    'explanation' => "The Bill of Rights guarantees civil liberties including freedom of speech, press, and religion.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 163
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which law aims to protect women and children from abuse?",
    'choices' => json_encode(['RA 9165', 'RA 6713', 'RA 9262', 'RA 9003']),
    'answer' => 'RA 9262',
    'explanation' => "RA 9262 is the Anti-Violence Against Women and Their Children Act.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 164
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What is the main goal of the Clean Air Act (RA 8749)?",
    'choices' => json_encode(['To regulate air pollution', 'To promote renewable energy', 'To protect marine biodiversity', 'To reduce plastic waste']),
    'answer' => 'To regulate air pollution',
    'explanation' => "RA 8749, also known as the Clean Air Act, aims to control and reduce air pollution to improve air quality in the country.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 165
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What right allows Filipino citizens to express opinions freely?",
    'choices' => json_encode(['Right to bear arms', 'Freedom of speech', 'Right to silence', 'Right to shelter']),
    'answer' => 'Freedom of speech',
    'explanation' => "Freedom of speech allows people to express their thoughts and opinions without fear.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 166
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which constitutional body manages civil service exams and appointments?",
    'choices' => json_encode(['COMELEC', 'CSC', 'CHED', 'DOLE']),
    'answer' => 'CSC',
    'explanation' => "The Civil Service Commission (CSC) is responsible for exams, appointments, and promotion of government employees.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 167
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What is the main goal of environmental protection?",
    'choices' => json_encode(['Increase income', 'Conserve nature', 'Use more fossil fuels', 'Cut down more trees']),
    'answer' => 'Conserve nature',
    'explanation' => "Environmental protection ensures that natural resources are preserved for future generations.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 168
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What government agency handles disaster preparedness and response?",
    'choices' => json_encode(['PAGASA', 'NDRRMC', 'DOJ', 'DENR']),
    'answer' => 'NDRRMC',
    'explanation' => "The National Disaster Risk Reduction and Management Council (NDRRMC) oversees disaster preparedness and response.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 169
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which government agency monitors weather conditions and typhoons?",
    'choices' => json_encode(['DOLE', 'DOST', 'PAGASA', 'NBI']),
    'answer' => 'PAGASA',
    'explanation' => "PAGASA provides weather forecasts and monitors typhoons to keep the public informed and safe.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 170
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What does the term 'public accountability' mean?",
    'choices' => json_encode(['Leaders can do as they please', 'Leaders must answer to the people', 'Leaders have full immunity', 'Leaders make personal decisions only']),
    'answer' => 'Leaders must answer to the people',
    'explanation' => "Public officials are accountable to the people and must act in public interest.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 171
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which law regulates the protection of personal data in the Philippines?",
    'choices' => json_encode(['RA 9003', 'RA 10173', 'RA 6713', 'RA 9262']),
    'answer' => 'RA 10173',
    'explanation' => "RA 10173 or the Data Privacy Act protects the privacy of personal information.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 172
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What is one basic duty of every Filipino citizen?",
    'choices' => json_encode(['To travel abroad', 'To pay taxes', 'To own land', 'To work in government']),
    'answer' => 'To pay taxes',
    'explanation' => "Paying taxes helps fund essential public services like education, healthcare, and infrastructure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 173
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which government agency is in charge of collecting internal revenue taxes?",
    'choices' => json_encode(['BOC', 'DOF', 'BIR', 'DBM']),
    'answer' => 'BIR',
    'explanation' => "The Bureau of Internal Revenue (BIR) collects taxes from individuals and businesses in the country.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 174
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which of the following promotes peaceful resolution of disputes?",
    'choices' => json_encode(['Trial by combat', 'Court litigation', 'Social media debate', 'Protests']),
    'answer' => 'Court litigation',
    'explanation' => "Court litigation is a formal, peaceful process of resolving legal conflicts and disputes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 175
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Who is the current Vice President of the Philippines as of 2025?",
    'choices' => json_encode(['Sara Duterte', 'Leni Robredo', 'Kiko Pangilinan', 'Rodrigo Duterte']),
    'answer' => 'Sara Duterte',
    'explanation' => "As of 2025, Sara Duterte is the sitting Vice President of the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 176
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What government office investigates complaints against public officials?",
    'choices' => json_encode(['CSC', 'Ombudsman', 'CHED', 'DOH']),
    'answer' => 'Ombudsman',
    'explanation' => "The Office of the Ombudsman investigates and prosecutes corrupt or abusive public officials.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 177
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "Which of the following promotes transparency and good governance?",
    'choices' => json_encode(['RA 10173', 'RA 6713', 'RA 9003', 'RA 7394']),
    'answer' => 'RA 6713',
    'explanation' => "RA 6713 promotes transparency and ethical standards among government officials and employees.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 178
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What is the role of CHED in Philippine education?",
    'choices' => json_encode(['Manages barangay schools', 'Oversees college education', 'Supervises public hospitals', 'Regulates internet access']),
    'answer' => 'Oversees college education',
    'explanation' => "The Commission on Higher Education (CHED) regulates colleges, universities, and graduate programs.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 179
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What is the right of a person to be informed of the charges against them?",
    'choices' => json_encode(['Due process', 'Right to shelter', 'Right to employment', 'Right to travel']),
    'answer' => 'Due process',
    'explanation' => "Due process ensures fair treatment and legal notice when a person is accused of a crime.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 180
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 9,        
    'question' => "What is the national motto of the Philippines?",
    'choices' => json_encode(['Bayan Ko, Mahal Ko', 'For God and Country', 'Maka-Diyos, Maka-Tao, Makakalikasan, at Makabansa', 'One Nation, One Spirit']),
    'answer' => 'Maka-Diyos, Maka-Tao, Makakalikasan, at Makabansa',
    'explanation' => "This national motto reflects the core Filipino values and principles enshrined in the Constitution.",
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}
