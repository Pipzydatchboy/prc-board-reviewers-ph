<?php

namespace Database\Seeders\CSE\GeneralInformation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralInformationPart10Seeder extends Seeder
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

        // 181
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which agency is in charge of issuing national statistics and civil registry documents?",
            'choices' => json_encode(['PRC', 'PSA', 'COMELEC', 'DOF']),
            'answer' => 'PSA',
            'explanation' => "The Philippine Statistics Authority (PSA) handles census data and issues birth, death, and marriage certificates.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 182
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which right ensures a fair trial for an accused person?",
            'choices' => json_encode(['Right to free education', 'Right to travel', 'Right to due process', 'Right to employment']),
            'answer' => 'Right to due process',
            'explanation' => "Due process ensures that an individual gets a fair trial and proper legal procedures.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 183
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which law helps protect the environment by managing waste properly?",
            'choices' => json_encode(['RA 9003', 'RA 6713', 'RA 9262', 'RA 10918']),
            'answer' => 'RA 9003',
            'explanation' => "RA 9003 or the Ecological Solid Waste Management Act sets guidelines for waste reduction, segregation, and disposal.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 184
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What is the primary function of the Legislative branch?",
            'choices' => json_encode(['Interpret laws', 'Implement laws', 'Create laws', 'Prosecute crimes']),
            'answer' => 'Create laws',
            'explanation' => "The Legislative branch is responsible for crafting and enacting laws.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 185
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which law protects consumers from unfair trade practices?",
            'choices' => json_encode(['RA 9003', 'RA 7394', 'RA 6713', 'RA 10173']),
            'answer' => 'RA 7394',
            'explanation' => "RA 7394 or the Consumer Act ensures consumer rights and fair business practices.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 186
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which agency ensures professionalism in licensed fields like engineering and nursing?",
            'choices' => json_encode(['CHED', 'PRC', 'CSC', 'PDEA']),
            'answer' => 'PRC',
            'explanation' => "The Professional Regulation Commission (PRC) licenses and regulates professionals.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 187
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Who has the power to approve the national budget?",
            'choices' => json_encode(['President', 'COA', 'Congress', 'DOF']),
            'answer' => 'Congress',
            'explanation' => "The Congress of the Philippines reviews, amends, and passes the national budget.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 188
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What does RA 10173 aim to protect?",
            'choices' => json_encode(['Freedom of speech', 'Right to information', 'Personal data privacy', 'Voting rights']),
            'answer' => 'Personal data privacy',
            'explanation' => "RA 10173 or the Data Privacy Act ensures protection of sensitive personal information.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 189
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What is the symbol of the country's independence and sovereignty?",
            'choices' => json_encode(['Narra tree', 'Rizal Monument', 'Philippine Flag', 'Carabao']),
            'answer' => 'Philippine Flag',
            'explanation' => "The Philippine Flag represents the country's independence, sovereignty, and national pride.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 190
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Who appoints the members of the Supreme Court?",
            'choices' => json_encode(['Chief Justice', 'President', 'Congress', 'Senate']),
            'answer' => 'President',
            'explanation' => "The President appoints the Justices of the Supreme Court with the recommendation of the Judicial and Bar Council.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 191
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which body has the sole power to try impeachment cases?",
            'choices' => json_encode(['Supreme Court', 'House of Representatives', 'Senate', 'COMELEC']),
            'answer' => 'Senate',
            'explanation' => "The Senate has the exclusive power to try and decide impeachment cases after being initiated by the House.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 192
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which law promotes gender equality and the rights of women?",
            'choices' => json_encode(['RA 9262', 'RA 9003', 'RA 9710', 'RA 10175']),
            'answer' => 'RA 9710',
            'explanation' => "RA 9710 or the Magna Carta of Women ensures protection and equal rights for women.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 193
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What is the function of the Executive branch?",
            'choices' => json_encode(['To create laws', 'To interpret laws', 'To implement laws', 'To audit agencies']),
            'answer' => 'To implement laws',
            'explanation' => "The Executive branch enforces and administers laws through its departments and offices.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 194
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What does the Philippine Constitution guarantee every Filipino citizen?",
            'choices' => json_encode(['A car', 'A house', 'Basic rights and freedoms', 'A government job']),
            'answer' => 'Basic rights and freedoms',
            'explanation' => "The Constitution protects the fundamental rights and freedoms of every Filipino.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 195
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What government agency promotes peace and order through community policing?",
            'choices' => json_encode(['DepEd', 'PNP', 'DOLE', 'DFA']),
            'answer' => 'PNP',
            'explanation' => "The Philippine National Police (PNP) ensures safety, peace, and public order nationwide.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 196
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which law addresses the problem of illegal drugs?",
            'choices' => json_encode(['RA 6713', 'RA 9165', 'RA 9003', 'RA 10173']),
            'answer' => 'RA 9165',
            'explanation' => "RA 9165 or the Comprehensive Dangerous Drugs Act provides laws against drug use and trafficking.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 197
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What does the Commission on Human Rights (CHR) do?",
            'choices' => json_encode(['Conduct elections', 'Issue licenses', 'Protect human rights', 'Collect taxes']),
            'answer' => 'Protect human rights',
            'explanation' => "CHR is the constitutional body tasked with ensuring the protection and promotion of human rights.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 198
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What is the official residence of the President of the Philippines?",
            'choices' => json_encode(['Malacañang Palace', 'Batasang Pambansa', 'Rizal Park', 'Fort Santiago']),
            'answer' => 'Malacañang Palace',
            'explanation' => "Malacañang Palace serves as the official residence and principal workplace of the Philippine President.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 199
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "Which of the following helps promote transparency in government?",
            'choices' => json_encode(['Freedom of Information', 'Election silence period', 'State secrets', 'Censorship']),
            'answer' => 'Freedom of Information',
            'explanation' => "The Freedom of Information policy allows citizens access to public documents to promote transparency.",
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        // 200
        $batch[] = [  
            'subject_id' => 3, 
            'part' => 10,         
            'question' => "What is the term for the power of the people to elect their leaders?",
            'choices' => json_encode(['Suffrage', 'Franchise', 'Citizenship', 'Legislation']),
            'answer' => 'Suffrage',
            'explanation' => "Suffrage is the right of citizens to vote in elections and choose leaders.",
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
