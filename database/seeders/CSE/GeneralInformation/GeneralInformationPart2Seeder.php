<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart2Seeder extends Seeder
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

        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "What is the highest law of the Philippines?",
            'choices' => json_encode(['Republic Acts', 'Civil Code', 'The Constitution', 'Presidential Decrees']),
            'answer' => 'The Constitution',
            'explanation' => "The Constitution is the supreme law of the land in the Philippines.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "Which of the following is a responsibility of every Filipino citizen?",
            'choices' => json_encode(['To own land', 'To obey the law', 'To travel abroad', 'To become a public official']),
            'answer' => 'To obey the law',
            'explanation' => "Obeying the law is one of the basic responsibilities of every citizen.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "Who is the head of the Executive branch of government?",
            'choices' => json_encode(['Chief Justice', 'Senate President', 'President', 'Speaker of the House']),
            'answer' => 'President',
            'explanation' => "The President is the head of the Executive branch as stated in the Constitution.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "What is the purpose of the Civil Service Commission (CSC)?",
            'choices' => json_encode(['To create laws', 'To administer elections', 'To promote merit and integrity in public service', 'To defend the country']),
            'answer' => 'To promote merit and integrity in public service',
            'explanation' => "The CSC ensures that government employees are hired based on merit and standards of conduct.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "Under RA 6713, public officials must uphold which value?",
            'choices' => json_encode(['Secrecy', 'Transparency', 'Authority', 'Luxury']),
            'answer' => 'Transparency',
            'explanation' => "RA 6713 promotes transparency and accountability in government service.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch = [];

        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "What is the highest law of the Philippines?",
            'choices' => json_encode(['Republic Acts', 'Civil Code', 'The Constitution', 'Presidential Decrees']),
            'answer' => 'The Constitution',
            'explanation' => "The Constitution is the supreme law of the land in the Philippines.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "Which of the following is a responsibility of every Filipino citizen?",
            'choices' => json_encode(['To own land', 'To obey the law', 'To travel abroad', 'To become a public official']),
            'answer' => 'To obey the law',
            'explanation' => "Obeying the law is one of the basic responsibilities of every citizen.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "Who is the head of the Executive branch of government?",
            'choices' => json_encode(['Chief Justice', 'Senate President', 'President', 'Speaker of the House']),
            'answer' => 'President',
            'explanation' => "The President is the head of the Executive branch as stated in the Constitution.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "What is the purpose of the Civil Service Commission (CSC)?",
            'choices' => json_encode(['To create laws', 'To administer elections', 'To promote merit and integrity in public service', 'To defend the country']),
            'answer' => 'To promote merit and integrity in public service',
            'explanation' => "The CSC ensures that government employees are hired based on merit and standards of conduct.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 2, 
            'question' => "Under RA 6713, public officials must uphold which value?",
            'choices' => json_encode(['Secrecy', 'Transparency', 'Authority', 'Luxury']),
            'answer' => 'Transparency',
            'explanation' => "RA 6713 promotes transparency and accountability in government service.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 26
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What does the DENR stand for?",
    'choices' => json_encode(['Department of Environmental Reform', 'Department of Education and Natural Resources', 'Department of Environment and Natural Resources', 'Development of Ecology and Nature Regulation']),
    'answer' => 'Department of Environment and Natural Resources',
    'explanation' => "DENR stands for Department of Environment and Natural Resources, the agency responsible for environmental conservation.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 27
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "Which of the following rights is guaranteed by the Constitution?",
    'choices' => json_encode(['Right to kill', 'Right to privacy', 'Right to destroy property', 'Right to cheat']),
    'answer' => 'Right to privacy',
    'explanation' => "The right to privacy is a constitutional right protecting personal life and data.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 28
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "Which body approves the national budget?",
    'choices' => json_encode(['Supreme Court', 'Congress', 'COMELEC', 'CSC']),
    'answer' => 'Congress',
    'explanation' => "The Philippine Congress has the power to deliberate and approve the national budget.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 29
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What does 'human rights' refer to?",
    'choices' => json_encode(['Privileges only for the rich', 'Benefits for government workers', 'Basic rights and freedoms entitled to all', 'Optional guidelines']),
    'answer' => 'Basic rights and freedoms entitled to all',
    'explanation' => "Human rights are fundamental rights and freedoms that belong to every person regardless of status.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 30
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "Which is an environmental concern?",
    'choices' => json_encode(['Textbook shortage', 'Soil erosion', 'Inflation', 'Internet outages']),
    'answer' => 'Soil erosion',
    'explanation' => "Soil erosion is a major environmental concern affecting agriculture and ecosystems.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 31
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "The principle that no person shall be deprived of life, liberty, or property without due process is called?",
    'choices' => json_encode(['Judicial Review', 'Due Process', 'Habeas Corpus', 'Equal Protection']),
    'answer' => 'Due Process',
    'explanation' => "Due process ensures fair treatment under the law before any personal rights are removed.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 32
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What kind of government does the Philippines have?",
    'choices' => json_encode(['Federal', 'Monarchial', 'Unitary Presidential', 'Military']),
    'answer' => 'Unitary Presidential',
    'explanation' => "The Philippines follows a unitary form of government with a presidential system.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 33
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "Which law protects women and children from abuse?",
    'choices' => json_encode(['RA 9165', 'RA 9262', 'RA 9003', 'RA 6713']),
    'answer' => 'RA 9262',
    'explanation' => "RA 9262 is the Anti-Violence Against Women and Their Children Act.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 34
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What does 'R.A.' stand for in Philippine law?",
    'choices' => json_encode(['Regular Act', 'Republic Authority', 'Republic Act', 'Rural Association']),
    'answer' => 'Republic Act',
    'explanation' => "‘R.A.’ stands for Republic Act, a law passed by the Philippine Congress.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 35
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What is one major goal of environmental protection?",
    'choices' => json_encode(['Increase population', 'Encourage mining', 'Reduce pollution', 'Promote deforestation']),
    'answer' => 'Reduce pollution',
    'explanation' => "One of the main goals of environmental protection is to reduce pollution for better health and biodiversity.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 36
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What does 'sustainable development' mean?",
    'choices' => json_encode(['Economic growth only', 'Development that meets present needs without harming the future', 'Development for the rich', 'Quick industrialization']),
    'answer' => 'Development that meets present needs without harming the future',
    'explanation' => "Sustainable development balances present needs with future generations' welfare.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 37
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "Who elects the President of the Philippines?",
    'choices' => json_encode(['Congress', 'The people through direct vote', 'Supreme Court', 'COMELEC']),
    'answer' => 'The people through direct vote',
    'explanation' => "Filipino citizens elect the President through a national direct election.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 38
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What is the right of a person to remain silent called?",
    'choices' => json_encode(['Due Process', 'Right to Silence', 'Right Against Self-Incrimination', 'Equal Protection']),
    'answer' => 'Right Against Self-Incrimination',
    'explanation' => "This right protects a person from being forced to testify against themselves.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 39
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "RA 9003 is a law about?",
    'choices' => json_encode(['Waste Management', 'Drug Enforcement', 'Labor Rights', 'Gender Equality']),
    'answer' => 'Waste Management',
    'explanation' => "RA 9003 is the Ecological Solid Waste Management Act of 2000.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 40
$batch[] = [
    'subject_id' => 3, 
    'part' => 2, 
    'question' => "What government agency investigates corruption among public officials?",
    'choices' => json_encode(['DILG', 'CSC', 'DOJ', 'Ombudsman']),
    'answer' => 'Ombudsman',
    'explanation' => "The Office of the Ombudsman investigates and prosecutes government officials accused of wrongdoing.",
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
