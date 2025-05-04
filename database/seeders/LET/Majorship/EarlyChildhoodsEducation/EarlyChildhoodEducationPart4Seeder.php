<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart4Seeder extends Seeder
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

                // 61
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Which of the following is a formative assessment tool in early childhood education?',
                    'choices'      => json_encode(['Standardized test','Anecdotal records','End-of-year exam','IQ test']),
                    'answer'       => 'Anecdotal records',
                    'explanation'  => 'Formative assessments like anecdotal records provide ongoing information about children’s progress.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 62
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Portfolios, which collect a child’s work over time, are examples of:',
                    'choices'      => json_encode(['Standardized assessments','Authentic assessments','Norm-referenced tests','IQ tests']),
                    'answer'       => 'Authentic assessments',
                    'explanation'  => 'Authentic assessments evaluate real-world tasks and a child’s work across time.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 63
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'A running record typically consists of:',
                    'choices'      => json_encode(['Checks at set intervals','Continuous narrative of all observed behaviors','Random sampling of behaviors','Multiple-choice items']),
                    'answer'       => 'Continuous narrative of all observed behaviors',
                    'explanation'  => 'Running records are detailed, real-time narrative accounts of a child’s behavior.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 64
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Event sampling is an observation method that:',
                    'choices'      => json_encode(['Records behaviors at fixed times','Records each occurrence of a specific behavior','Uses checklists only','Collects test scores']),
                    'answer'       => 'Records each occurrence of a specific behavior',
                    'explanation'  => 'Event sampling focuses on particular behaviors whenever they occur.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 65
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Time sampling requires the observer to:',
                    'choices'      => json_encode(['Observe continuously without breaks','Record behaviors only at predetermined intervals','Use standardized tests','Interview each child']),
                    'answer'       => 'Record behaviors only at predetermined intervals',
                    'explanation'  => 'Time sampling captures data on behaviors at specific time points.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 66
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'A checklist assessment typically uses:',
                    'choices'      => json_encode(['Narrative descriptions','Yes/no indicators','Essay responses','Multiple-choice questions']),
                    'answer'       => 'Yes/no indicators',
                    'explanation'  => 'Checklists list skills or behaviors and indicate presence or absence.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 67
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Which assessment type summarizes learning at the end of a unit?',
                    'choices'      => json_encode(['Formative assessment','Summative assessment','Diagnostic assessment','Informal observation']),
                    'answer'       => 'Summative assessment',
                    'explanation'  => 'Summative assessments evaluate student learning after instruction.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 68
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Developmental screening tools are used to:',
                    'choices'      => json_encode(['Diagnose disabilities','Identify children at risk for delays','Assign grades','Replace teacher observations']),
                    'answer'       => 'Identify children at risk for delays',
                    'explanation'  => 'Screening tools highlight potential developmental concerns for further evaluation.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 69
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Anecdotal records should be:',
                    'choices'      => json_encode(['Vague and general','Objective and specific','Filled with opinions','Long essays']),
                    'answer'       => 'Objective and specific',
                    'explanation'  => 'Effective anecdotal records describe observable behaviors without judgment.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 70
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Observation notes that focus on a sequence of events are called:',
                    'choices'      => json_encode(['Event logs','Checklists','Rating scales','Portfolios']),
                    'answer'       => 'Event logs',
                    'explanation'  => 'Event logs document specific incidents or behaviors in sequence.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 71
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Rating scales in observation typically use:',
                    'choices'      => json_encode(['Yes/no responses','Numerical or descriptive levels of performance','Essay feedback','Checklists']),
                    'answer'       => 'Numerical or descriptive levels of performance',
                    'explanation'  => 'Rating scales assess the degree or quality of a behavior on a continuum.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 72
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Authentic assessment examples include:',
                    'choices'      => json_encode(['Multiple-choice tests','Performance tasks and portfolios','Fill-in-the-blank quizzes','Standardized exams']),
                    'answer'       => 'Performance tasks and portfolios',
                    'explanation'  => 'Authentic assessments require children to demonstrate skills in real-world contexts.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 73
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Progress monitoring data is used to:',
                    'choices'      => json_encode(['Assign final grades','Adjust instructional strategies regularly','Replace observations','Formulate long-term policy']),
                    'answer'       => 'Adjust instructional strategies regularly',
                    'explanation'  => 'Monitoring progress helps teachers intervene and tailor instruction to student needs.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 74
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Family input on assessments can be gathered through:',
                    'choices'      => json_encode(['Standardized tests only','Parent questionnaires and interviews','Teacher-only journals','Peer assessments']),
                    'answer'       => 'Parent questionnaires and interviews',
                    'explanation'  => 'Engaging families through questionnaires or interviews enriches assessment data.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 75
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Assessment results are best communicated to families via:',
                    'choices'      => json_encode(['Technical jargon reports','Clear summaries and examples','Only test scores','No communication']),
                    'answer'       => 'Clear summaries and examples',
                    'explanation'  => 'Sharing understandable summaries helps families support their children.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 76
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Referral for early intervention is indicated when assessment shows:',
                    'choices'      => json_encode(['Typical development','Consistent mastery of skills','Significant developmental delays','Excessive play behavior']),
                    'answer'       => 'Significant developmental delays',
                    'explanation'  => 'Early intervention referrals address notable delays in development.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 77
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Ethical assessment practice requires:',
                    'choices'      => json_encode(['Sharing data publicly','Maintaining confidentiality','Using tests without consent','Ignoring cultural context']),
                    'answer'       => 'Maintaining confidentiality',
                    'explanation'  => 'Confidentiality protects children’s privacy and dignity in assessment.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 78
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Assessment data should inform:',
                    'choices'      => json_encode(['Rigid lesson plans','Instructional decision-making','Only standardized testing','None of the above']),
                    'answer'       => 'Instructional decision-making',
                    'explanation'  => 'Data-driven decisions ensure teaching meets children’s needs.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 79
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Which tool provides skill-level benchmarks for young children?',
                    'choices'      => json_encode(['Developmental checklist','Multiple-choice test','Essay assignment','IQ score chart']),
                    'answer'       => 'Developmental checklist',
                    'explanation'  => 'Checklists outline age-appropriate skills across developmental domains.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 80
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 4,
                    'question'     => 'Teachers use observation tools primarily to:',
                    'choices'      => json_encode(['Control play activities','Document children’s development and guide instruction','Assign participation grades','Replace parent feedback']),
                    'answer'       => 'Document children’s development and guide instruction',
                    'explanation'  => 'Observations capture authentic insights into children’s abilities to inform teaching.',
                    'created_at'   => $now,
                    'updated_at'   => $now
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
