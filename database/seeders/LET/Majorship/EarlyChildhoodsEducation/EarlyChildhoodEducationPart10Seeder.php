<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...

                // 181
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'How often must LET-ECE professional teaching licenses be renewed in the Philippines?',
                    'choices'      => json_encode(['Every year','Every two years','Every three years','Every five years']),
                    'answer'       => 'Every three years',
                    'explanation'  => 'PRC licenses, including those for ECE, expire after three years and require renewal.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 182
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Which agency is responsible for regulating and issuing professional teaching licenses in the Philippines?',
                    'choices'      => json_encode(['DepEd','CHED','PRC','TESDA']),
                    'answer'       => 'PRC',
                    'explanation'  => 'The Professional Regulation Commission (PRC) administers the LET and issues teaching licenses.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 183
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Under PRC guidelines, how many Continuing Professional Development (CPD) units are required for license renewal?',
                    'choices'      => json_encode(['5 units','10 units','15 units','20 units']),
                    'answer'       => '15 units',
                    'explanation'  => 'PRC requires at least 15 CPD units every three years for license renewal.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 184
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Which document outlines the competencies and performance standards for Filipino teachers, including ECE?',
                    'choices'      => json_encode(['RA 9155','Professional Standards for Teachers','ELDS','Child Protection Policy']),
                    'answer'       => 'Professional Standards for Teachers',
                    'explanation'  => 'The PST defines the knowledge, skills, and values expected of educators nationwide.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 185
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Which activity is most effective for engaging families in early literacy at school?',
                    'choices'      => json_encode(['Standardized testing','Family literacy night','Writing reports','Silent reading hour']),
                    'answer'       => 'Family literacy night',
                    'explanation'  => 'Family literacy nights involve parents and children in interactive reading activities.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 186
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'To refer a child for a hearing screening, an ECE teacher should contact which community resource?',
                    'choices'      => json_encode(['Local health unit','Public library','City hall','Police station']),
                    'answer'       => 'Local health unit',
                    'explanation'  => 'Health units provide audiology services and community health referrals.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 187
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'A community garden project in an ECE program primarily supports:',
                    'choices'      => json_encode(['Mathematics drills','Nutrition education and hands-on learning','Motor skill testing','Facility maintenance']),
                    'answer'       => 'Nutrition education and hands-on learning',
                    'explanation'  => 'Gardening activities teach children about healthy foods and science concepts.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 188
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Accepting expensive gifts from parents can create which ethical concern for teachers?',
                    'choices'      => json_encode(['Conflict of interest','Enhanced rapport','Improved resources','No concern']),
                    'answer'       => 'Conflict of interest',
                    'explanation'  => 'Ethical guidelines discourage gifts that may influence professional judgment.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 189
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Which law mandates the protection of personal data, relevant to ECE record keeping?',
                    'choices'      => json_encode(['RA 7610','RA 10175','RA 9262','RA 10364']),
                    'answer'       => 'RA 10175',
                    'explanation'  => 'The Data Privacy Act (RA 10175) regulates the collection and handling of personal information.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 190
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Effective policy advocacy for ECE often focuses on:',
                    'choices'      => json_encode(['Curriculum standardization','Legislation and funding support','Teacher salaries only','Facility design']),
                    'answer'       => 'Legislation and funding support',
                    'explanation'  => 'Advocacy efforts aim to influence laws and secure resources for quality ECE.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 191
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Which pre-employment screening is commonly required for ECE staff?',
                    'choices'      => json_encode(['Medical exam and NBI clearance','IQ test','Driver’s license','Credit report']),
                    'answer'       => 'Medical exam and NBI clearance',
                    'explanation'  => 'Background checks and health clearances ensure safety and well-being of children.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 192
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Orientation for parent volunteers should include all EXCEPT:',
                    'choices'      => json_encode(['Roles and responsibilities','Confidentiality policies','Child developmental theories in depth','Emergency procedures']),
                    'answer'       => 'Child developmental theories in depth',
                    'explanation'  => 'Volunteers need practical guidelines, not exhaustive theoretical content.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 193
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Using class messaging apps for family updates requires teachers to:',
                    'choices'      => json_encode(['Post any content freely','Ensure privacy and obtain consent','Share student grades publicly','Only use official letters']),
                    'answer'       => 'Ensure privacy and obtain consent',
                    'explanation'  => 'Digital communication must comply with privacy policies and parental permissions.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 194
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'A parent resource corner in the classroom typically offers:',
                    'choices'      => json_encode(['Children’s art only','Developmental handouts and community contacts','Administrative forms only','Teacher personal items']),
                    'answer'       => 'Developmental handouts and community contacts',
                    'explanation'  => 'Resource corners provide families with information and support contacts for child development.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 195
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Sustainability in ECE programs can be enhanced by:',
                    'choices'      => json_encode(['High staff turnover','Community partnerships and resource sharing','Exclusive funding sources','Closed-door policies']),
                    'answer'       => 'Community partnerships and resource sharing',
                    'explanation'  => 'Leveraging community resources ensures program longevity and support.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 196
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Professional learning communities among ECE teachers foster:',
                    'choices'      => json_encode(['Individual competition','Collaborative inquiry and shared practice','Isolation','Authoritarian leadership']),
                    'answer'       => 'Collaborative inquiry and shared practice',
                    'explanation'  => 'PLCs encourage mutual reflection and improvement across teaching teams.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 197
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Which legislation protects children from abuse and exploitation, relevant to ECE reporting?',
                    'choices'      => json_encode(['RA 7610','RA 10410','RA 10928','RA 9262']),
                    'answer'       => 'RA 7610',
                    'explanation'  => 'The Special Protection of Children Against Abuse, Exploitation and Discrimination Act (RA 7610) mandates reporting of abuse.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 198
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'A quality self-assessment tool for ECE programs is:',
                    'choices'      => json_encode(['Annual test scores','Program Standards Self-Assessment','Physical fitness tests','None']),
                    'answer'       => 'Program Standards Self-Assessment',
                    'explanation'  => 'Self-assessment against standards helps programs identify areas for improvement.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 199
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Engaging community volunteers in ECE supports:',
                    'choices'      => json_encode(['Program isolation','Enriched learning experiences and additional support','Higher fees','Standardized outcomes']),
                    'answer'       => 'Enriched learning experiences and additional support',
                    'explanation'  => 'Volunteers bring diverse skills and resources, enhancing program offerings.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 200
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 10,
                    'question'     => 'Which approach best ensures ongoing family involvement in ECE programs?',
                    'choices'      => json_encode(['Once-a-year meetings','Regular two-way communication and participatory events','Strictly academic reporting','Annual surveys only']),
                    'answer'       => 'Regular two-way communication and participatory events',
                    'explanation'  => 'Consistent engagement through dialogue and shared activities fosters strong partnerships.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
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
