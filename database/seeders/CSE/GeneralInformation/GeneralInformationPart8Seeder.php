<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart8Seeder extends Seeder
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

// 141
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What is the highest law of the land in the Philippines?",
    'choices' => json_encode(['Republic Act', 'Presidential Decree', 'The Constitution', 'Executive Order']),
    'answer' => 'The Constitution',
    'explanation' => "The Constitution is the supreme law that guides all legal and political matters in the country.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 142
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which body has the power to declare a law unconstitutional?",
    'choices' => json_encode(['Congress', 'Supreme Court', 'Senate', 'Ombudsman']),
    'answer' => 'Supreme Court',
    'explanation' => "The Supreme Court can nullify laws that are inconsistent with the Constitution.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 143
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What is the role of the Department of Health (DOH)?",
    'choices' => json_encode(['Build highways', 'Promote public health and safety', 'Audit government offices', 'Collect taxes']),
    'answer' => 'Promote public health and safety',
    'explanation' => "The DOH is responsible for ensuring access to basic public health services.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 144
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which law is known as the Data Privacy Act?",
    'choices' => json_encode(['RA 9003', 'RA 6713', 'RA 10173', 'RA 7394']),
    'answer' => 'RA 10173',
    'explanation' => "RA 10173 protects personal data stored and processed by institutions in the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 145
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What does the Philippine eagle represent?",
    'choices' => json_encode(['War', 'Power and Honor', 'Courage and Strength', 'Trade and Business']),
    'answer' => 'Courage and Strength',
    'explanation' => "The Philippine eagle is a symbol of strength, courage, and uniqueness of the Filipino spirit.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 146
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which government body is responsible for the audit of public funds?",
    'choices' => json_encode(['DOF', 'COA', 'CSC', 'Senate']),
    'answer' => 'COA',
    'explanation' => "The Commission on Audit (COA) checks the proper use of government funds and properties.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 147
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which branch of government is tasked to implement laws?",
    'choices' => json_encode(['Judicial', 'Executive', 'Legislative', 'Local Government']),
    'answer' => 'Executive',
    'explanation' => "The Executive branch is responsible for carrying out and enforcing laws.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 148
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What does RA 9003 promote?",
    'choices' => json_encode(['Public Education', 'Environmental Protection through Waste Management', 'Drug Rehabilitation', 'Internet Safety']),
    'answer' => 'Environmental Protection through Waste Management',
    'explanation' => "RA 9003 is the Ecological Solid Waste Management Act, promoting sustainable waste disposal and segregation.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 149
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which government agency promotes public order and safety at the local level?",
    'choices' => json_encode(['DILG', 'DOJ', 'CHED', 'DOT']),
    'answer' => 'DILG',
    'explanation' => "The Department of the Interior and Local Government (DILG) supervises LGUs and ensures peace and order.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 150
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What is the national tree of the Philippines?",
    'choices' => json_encode(['Molave', 'Acacia', 'Narra', 'Bamboo']),
    'answer' => 'Narra',
    'explanation' => "The Narra tree symbolizes strength and resilience, making it the national tree of the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 151
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which agency supervises and regulates higher education in the Philippines?",
    'choices' => json_encode(['TESDA', 'DepEd', 'CHED', 'PRC']),
    'answer' => 'CHED',
    'explanation' => "CHED is the government agency responsible for tertiary and graduate education institutions.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 152
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which is a symbol of Filipino resilience and hard work?",
    'choices' => json_encode(['Philippine Eagle', 'Narra Tree', 'Carabao', 'Banig']),
    'answer' => 'Carabao',
    'explanation' => "The Carabao represents strength, perseverance, and the hardworking nature of Filipinos.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 153
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which law promotes ethical standards in government service?",
    'choices' => json_encode(['RA 9003', 'RA 6713', 'RA 9165', 'RA 9262']),
    'answer' => 'RA 6713',
    'explanation' => "RA 6713 is the Code of Conduct and Ethical Standards for Public Officials and Employees.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 154
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which of the following promotes human rights and dignity?",
    'choices' => json_encode(['Oppression', 'Martial law', 'Equality and respect', 'Discrimination']),
    'answer' => 'Equality and respect',
    'explanation' => "Equality and respect are basic human rights and help uphold the dignity of every individual.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 155
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What is the purpose of the Philippine Independence Day?",
    'choices' => json_encode(['To celebrate the founding of the Republic', 'To honor national heroes', 'To commemorate the end of World War II', 'To mark the country’s independence from foreign rule']),
    'answer' => 'To mark the country’s independence from foreign rule',
    'explanation' => "Philippine Independence Day commemorates the country's independence from Spanish rule on June 12, 1898.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 156
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which law is known as the Magna Carta for Women?",
    'choices' => json_encode(['RA 9262', 'RA 9710', 'RA 9165', 'RA 10173']),
    'answer' => 'RA 9710',
    'explanation' => "RA 9710 is the Magna Carta of Women, ensuring the protection and promotion of women's rights.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 157
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What does RA 7394 protect?",
    'choices' => json_encode(['Consumers', 'Government officials', 'Teachers', 'OFWs']),
    'answer' => 'Consumers',
    'explanation' => "RA 7394 or the Consumer Act protects the interests and welfare of consumers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 158
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which agency issues professional licenses in the Philippines?",
    'choices' => json_encode(['CHED', 'PRC', 'TESDA', 'CSC']),
    'answer' => 'PRC',
    'explanation' => "The Professional Regulation Commission (PRC) issues and regulates licenses of professionals in the country.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 159
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "Which of the following ensures the right to education?",
    'choices' => json_encode(['RA 6713', 'RA 9003', 'RA 9155', 'RA 9262']),
    'answer' => 'RA 9155',
    'explanation' => "RA 9155 or the Governance of Basic Education Act ensures access to quality basic education.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 160
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 8,       
    'question' => "What is celebrated during Earth Day?",
    'choices' => json_encode(['Sportsmanship', 'Environmental Awareness', 'Independence', 'Election Campaign']),
    'answer' => 'Environmental Awareness',
    'explanation' => "Earth Day is celebrated to promote awareness and action towards environmental protection and sustainability.",
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
