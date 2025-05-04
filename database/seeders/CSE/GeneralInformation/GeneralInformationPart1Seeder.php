<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart1Seeder extends Seeder
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
            'part' => 1,
            'question' => "What are the three main branches of the Philippine government?",
            'choices' => json_encode(['Executive, Judicial, Legislative', 'Barangay, City, National', 'Senate, Congress, Judiciary', 'Presidential, Parliamentary, Federal']),
            'answer' => 'Executive, Judicial, Legislative',
            'explanation' => "The Philippine government is divided into Executive, Legislative, and Judicial branches as stated in the Constitution.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "RA 6713 is also known as:",
            'choices' => json_encode(['The Civil Code of the Philippines', 'The Anti-Graft and Corrupt Practices Act', 'The Code of Conduct and Ethical Standards for Public Officials and Employees', 'The Administrative Code of 1987']),
            'answer' => 'The Code of Conduct and Ethical Standards for Public Officials and Employees',
            'explanation' => "RA 6713 sets the standards for ethical conduct of public officials and employees in the Philippines.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "What body has the power to interpret the Constitution?",
            'choices' => json_encode(['House of Representatives', 'Commission on Elections', 'Supreme Court', 'Department of Justice']),
            'answer' => 'Supreme Court',
            'explanation' => "The Supreme Court has the power to interpret the Constitution under the Judicial branch.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "Which government branch implements the laws?",
            'choices' => json_encode(['Executive', 'Judicial', 'Legislative', 'Barangay']),
            'answer' => 'Executive',
            'explanation' => "The Executive branch is responsible for implementing the laws enacted by Congress.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 5
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "Which article of the Philippine Constitution discusses the Bill of Rights?",
            'choices' => json_encode(['Article III', 'Article I', 'Article VI', 'Article VII']),
            'answer' => 'Article III',
            'explanation' => "Article III of the 1987 Constitution contains the Bill of Rights.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 6
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "Which is NOT a duty of a Filipino citizen?",
            'choices' => json_encode(['Obey laws', 'Pay taxes', 'Vote in all elections', 'Support the Constitution']),
            'answer' => 'Vote in all elections',
            'explanation' => "Voting is a right and privilege but not a mandatory duty.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 7
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "What is the term of office of a Senator in the Philippines?",
            'choices' => json_encode(['3 years', '4 years', '5 years', '6 years']),
            'answer' => '6 years',
            'explanation' => "Philippine Senators are elected to a term of six years.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 8
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "What agency is primarily responsible for protecting the environment?",
            'choices' => json_encode(['DENR', 'DOH', 'DPWH', 'DepEd']),
            'answer' => 'DENR',
            'explanation' => "The Department of Environment and Natural Resources (DENR) manages and protects the environment and natural resources.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 9
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "Freedom of speech is a right under which article of the Constitution?",
            'choices' => json_encode(['Article I', 'Article III', 'Article V', 'Article VII']),
            'answer' => 'Article III',
            'explanation' => "Freedom of speech is part of the Bill of Rights under Article III.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 10
        $batch[] = [
            'subject_id' => 3, 
            'part' => 1,
            'question' => "Which principle promotes peaceful settlement of disputes?",
            'choices' => json_encode(['Justice', 'Human Rights', 'Rule of Law', 'Peaceful Resolution']),
            'answer' => 'Peaceful Resolution',
            'explanation' => "Peaceful resolution encourages resolving conflicts without violence or war.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
// 11
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "Who is the Commander-in-Chief of all armed forces in the Philippines?",
    'choices' => json_encode(['Chief Justice', 'President', 'Senate President', 'Secretary of National Defense']),
    'answer' => 'President',
    'explanation' => "The President of the Philippines is the Commander-in-Chief of the Armed Forces as stated in the Constitution.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 12
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "Which government agency is responsible for holding national elections?",
    'choices' => json_encode(['NBI', 'COMELEC', 'DOJ', 'DILG']),
    'answer' => 'COMELEC',
    'explanation' => "The Commission on Elections (COMELEC) administers all election-related activities in the country.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 13
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "What is one major principle of R.A. 6713?",
    'choices' => json_encode(['Anonymity', 'Public Accountability', 'Confidentiality', 'Exclusivity']),
    'answer' => 'Public Accountability',
    'explanation' => "RA 6713 emphasizes public accountability and transparency in government service.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 14
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "Which government office is tasked with protecting human rights in the Philippines?",
    'choices' => json_encode(['DOJ', 'CHR', 'NBI', 'DILG']),
    'answer' => 'CHR',
    'explanation' => "The Commission on Human Rights (CHR) is the constitutional office that monitors human rights violations.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 15
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "What does the principle of 'equal protection of the laws' mean?",
    'choices' => json_encode(['Only Filipinos have rights', 'Laws apply differently to regions', 'Everyone is treated equally by the law', 'Only the rich can access justice']),
    'answer' => 'Everyone is treated equally by the law',
    'explanation' => "Equal protection means that everyone, regardless of status, is entitled to the same legal rights and protections.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 16
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "What is a recent major environmental issue in the Philippines?",
    'choices' => json_encode(['Coral bleaching in the West Philippine Sea', 'Flooding in Europe', 'Wildfires in Australia', 'Air pollution in Japan']),
    'answer' => 'Coral bleaching in the West Philippine Sea',
    'explanation' => "Coral bleaching due to rising sea temperatures and pollution is a major concern in Philippine marine biodiversity.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 17
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "Which of the following rights is NOT found in the Philippine Constitution?",
    'choices' => json_encode(['Right to due process', 'Right to a fair trial', 'Right to bear arms freely', 'Right to privacy']),
    'answer' => 'Right to bear arms freely',
    'explanation' => "The right to bear arms is not explicitly granted by the Constitution like in the U.S.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 18
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "What is the maximum number of terms a Philippine President can serve?",
    'choices' => json_encode(['One 4-year term', 'Two 4-year terms', 'One 6-year term', 'Two 6-year terms']),
    'answer' => 'One 6-year term',
    'explanation' => "The President of the Philippines can only serve one 6-year term with no re-election.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 19
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "Which principle ensures the separation of the three branches of government?",
    'choices' => json_encode(['Checks and Balances', 'Bill of Rights', 'Equal Opportunity', 'Popular Sovereignty']),
    'answer' => 'Checks and Balances',
    'explanation' => "Checks and balances ensure that no branch of government becomes too powerful.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 20
$batch[] = [
    'subject_id' => 3, 
    'part' => 1,
    'question' => "Which of the following is an example of current environmental legislation?",
    'choices' => json_encode(['Clean Air Act', 'Code of Ethics', 'Labor Code', 'Civil Code']),
    'answer' => 'Clean Air Act',
    'explanation' => "The Clean Air Act regulates air pollution and aims to protect air quality in the Philippines.",
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
