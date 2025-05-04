<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

      // 61
      $batch[] = [ 
        'subject_id' => 3, 
        'part' => 4,   
        'question' => "Which constitutional body ensures free, honest, and orderly elections in the Philippines?",
        'choices' => json_encode(['CSC', 'COMELEC', 'COA', 'DILG']),
        'answer' => 'COMELEC',
        'explanation' => "The Commission on Elections (COMELEC) is the agency tasked with supervising elections in the Philippines.",
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    // 62
    $batch[] = [ 
        'subject_id' => 3, 
        'part' => 4,   
        'question' => "Which branch of government is responsible for creating laws?",
        'choices' => json_encode(['Executive', 'Judicial', 'Legislative', 'Local Government']),
        'answer' => 'Legislative',
        'explanation' => "The Legislative branch is composed of the Senate and the House of Representatives which create laws.",
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    // 63
    $batch[] = [ 
        'subject_id' => 3, 
        'part' => 4,   
        'question' => "Which document contains the fundamental rights of Filipinos?",
        'choices' => json_encode(['Civil Code', 'Labor Code', 'Bill of Rights', 'Penal Code']),
        'answer' => 'Bill of Rights',
        'explanation' => "The Bill of Rights, found in Article III of the 1987 Constitution, outlines the basic rights of every Filipino.",
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    // 64
    $batch[] = [ 
        'subject_id' => 3, 
        'part' => 4,   
        'question' => "Which government agency is responsible for tax collection?",
        'choices' => json_encode(['BIR', 'DOF', 'PSA', 'CHED']),
        'answer' => 'BIR',
        'explanation' => "The Bureau of Internal Revenue (BIR) collects taxes for the Philippine government.",
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    // 65
    $batch[] = [ 
        'subject_id' => 3, 
        'part' => 4,   
        'question' => "Which law promotes ecological waste management?",
        'choices' => json_encode(['RA 6713', 'RA 9003', 'RA 9165', 'RA 8425']),
        'answer' => 'RA 9003',
        'explanation' => "RA 9003 is the Ecological Solid Waste Management Act of 2000.",
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
    // 66
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "Which Philippine law emphasizes honesty and integrity among government employees?",
'choices' => json_encode(['RA 9165', 'RA 6713', 'RA 9003', 'RA 9262']),
'answer' => 'RA 6713',
'explanation' => "RA 6713 is the Code of Conduct and Ethical Standards for Public Officials and Employees.",
'created_at' => now(),
'updated_at' => now(),
];

// 67
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "Which agency issues Professional Licenses in the Philippines?",
'choices' => json_encode(['CHED', 'DOLE', 'PRC', 'DepEd']),
'answer' => 'PRC',
'explanation' => "The Professional Regulation Commission (PRC) handles licensing of professionals like teachers, engineers, and nurses.",
'created_at' => now(),
'updated_at' => now(),
];

// 68
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "What is the supreme law of the Philippines?",
'choices' => json_encode(['Republic Act', 'The Constitution', 'Presidential Decree', 'Local Ordinance']),
'answer' => 'The Constitution',
'explanation' => "The Constitution is the fundamental law that all other laws must follow.",
'created_at' => now(),
'updated_at' => now(),
];

// 69
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "What is the term for the right to vote in elections?",
'choices' => json_encode(['Citizenship', 'Suffrage', 'Candidacy', 'Legislation']),
'answer' => 'Suffrage',
'explanation' => "Suffrage is the right of every qualified citizen to vote in public elections.",
'created_at' => now(),
'updated_at' => now(),
];

// 70
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "Which branch of government interprets the laws?",
'choices' => json_encode(['Executive', 'Legislative', 'Judicial', 'Administrative']),
'answer' => 'Judicial',
'explanation' => "The Judicial branch interprets the laws and ensures justice is served.",
'created_at' => now(),
'updated_at' => now(),
];

// 71
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "What government office investigates human rights violations?",
'choices' => json_encode(['DOH', 'CSC', 'CHR', 'DOST']),
'answer' => 'CHR',
'explanation' => "The Commission on Human Rights (CHR) investigates human rights violations in the country.",
'created_at' => now(),
'updated_at' => now(),
];

// 72
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "Which agency is in charge of education policies in basic education?",
'choices' => json_encode(['CHED', 'PRC', 'DepEd', 'DILG']),
'answer' => 'DepEd',
'explanation' => "The Department of Education (DepEd) handles the basic education curriculum and policies.",
'created_at' => now(),
'updated_at' => now(),
];

// 73
$batch[] = [ 
    'subject_id' => 3, 
    'part' => 4,   
    'question' => "What is the capital city of the Philippines?",
    'choices' => json_encode(['Davao City', 'Cebu City', 'Manila', 'Quezon City']),
    'answer' => 'Manila',
    'explanation' => "Manila is the capital city of the Philippines, known for its rich history and cultural landmarks.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 74
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "What is the purpose of environmental protection?",
'choices' => json_encode(['To increase government revenue', 'To reduce economic activity', 'To preserve nature and ensure sustainable use', 'To encourage mining']),
'answer' => 'To preserve nature and ensure sustainable use',
'explanation' => "Environmental protection ensures that natural resources are conserved for future generations.",
'created_at' => now(),
'updated_at' => now(),
];

// 75
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "When is Philippine Independence Day celebrated?",
'choices' => json_encode(['July 4', 'June 12', 'August 21', 'September 15']),
'answer' => 'June 12',
'explanation' => "June 12, 1898 marks the declaration of Philippine independence from Spain.",
'created_at' => now(),
'updated_at' => now(),
];

// 76
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "Which law mandates transparency in government transactions?",
'choices' => json_encode(['RA 6713', 'RA 9003', 'RA 9165', 'RA 10173']),
'answer' => 'RA 6713',
'explanation' => "RA 6713 promotes transparency and accountability in government service.",
'created_at' => now(),
'updated_at' => now(),
];

// 77
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "Which organization is known for helping victims of armed conflict and disasters?",
'choices' => json_encode(['COMELEC', 'NBI', 'Red Cross', 'DILG']),
'answer' => 'Red Cross',
'explanation' => "The Philippine Red Cross provides humanitarian aid and disaster relief.",
'created_at' => now(),
'updated_at' => now(),
];

// 78
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "What is the minimum voting age in the Philippines?",
'choices' => json_encode(['15', '18', '21', '25']),
'answer' => '18',
'explanation' => "A Filipino must be at least 18 years old to vote.",
'created_at' => now(),
'updated_at' => now(),
];

// 79
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "Which constitutional commission ensures fair and honest elections?",
'choices' => json_encode(['COMELEC', 'CSC', 'COA', 'PDEA']),
'answer' => 'COMELEC',
'explanation' => "COMELEC is tasked with enforcing and supervising all elections in the country.",
'created_at' => now(),
'updated_at' => now(),
];

// 80
$batch[] = [ 
'subject_id' => 3, 
'part' => 4,   
'question' => "What is the national flower of the Philippines?",
'choices' => json_encode(['Gumamela', 'Rosal', 'Jasmine (Sampaguita)', 'Rose']),
'answer' => 'Jasmine (Sampaguita)',
'explanation' => "Sampaguita, or Jasmine, is the national flower symbolizing purity and humility.",
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
