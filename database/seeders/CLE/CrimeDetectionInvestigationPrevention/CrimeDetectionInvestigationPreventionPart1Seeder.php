<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

//1
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which principle of criminal investigation emphasizes the necessity to discover all facts surrounding an offense objectively?',
    'choices'     => json_encode([
        'Principle of objectivity',
        'Principle of legality',
        'Principle of proportionality',
        'Principle of immediacy',
    ]),
    'answer'      => 'Principle of objectivity',
    'explanation' => 'Investigators must gather facts impartially without bias to ensure justice.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'In the intelligence cycle, what phase involves the systematic analysis of collected information?',
    'choices'     => json_encode([
        'Analysis',
        'Collection',
        'Dissemination',
        'Direction',
    ]),
    'answer'      => 'Analysis',
    'explanation' => 'Analysis transforms raw data into actionable intelligence for decision-makers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which surveillance method involves observing a suspect without their knowledge at a distance?',
    'choices'     => json_encode([
        'Covert surveillance',
        'Overt surveillance',
        'Technical surveillance',
        'Physical surveillance',
    ]),
    'answer'      => 'Covert surveillance',
    'explanation' => 'Covert surveillance conceals the investigator’s presence to avoid alerting the suspect.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which type of informant is paid by law enforcement for information?',
    'choices'     => json_encode([
        'Confidential informant',
        'Citizen-informant',
        'Anonymous tipster',
        'Professional witness',
    ]),
    'answer'      => 'Confidential informant',
    'explanation' => 'Confidential informants receive compensation or benefit for confidential information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Under the Constitution, which requirement must be met before conducting a search and seizure?',
    'choices'     => json_encode([
        'Probable cause and warrant',
        'Consent of owner only',
        'Reasonable suspicion only',
        'Informant tip only',
    ]),
    'answer'      => 'Probable cause and warrant',
    'explanation' => 'Search warrants are issued upon a showing of probable cause under oath or affirmation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which sketching technique accurately represents distances at a crime scene?',
    'choices'     => json_encode([
        'Metric sketch',
        'Perspective sketch',
        'Panoramic sketch',
        'Elevation sketch',
    ]),
    'answer'      => 'Metric sketch',
    'explanation' => 'Metric sketches use precise measurements and scale to depict a scene accurately.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which investigative function involves determining the sequence of events at a crime scene?',
    'choices'     => json_encode([
        'Crime scene reconstruction',
        'Evidence collection',
        'Witness interview',
        'Suspect interrogation',
    ]),
    'answer'      => 'Crime scene reconstruction',
    'explanation' => 'Reconstruction analyzes evidence and scene layout to recreate the crime chronology.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'What is the first officer on the crime scene responsible for securing?',
    'choices'     => json_encode([
        'Scene perimeter',
        'Evidence packaging',
        'Witness statements',
        'Suspect interview',
    ]),
    'answer'      => 'Scene perimeter',
    'explanation' => 'Establishing a perimeter prevents contamination and loss of evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which term describes information obtained directly by an investigator from observing the crime scene?',
    'choices'     => json_encode([
        'Primary data',
        'Secondary data',
        'Tertiary data',
        'Derivative data',
    ]),
    'answer'      => 'Primary data',
    'explanation' => 'Primary data is firsthand information gathered through direct observation or measurement.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which warrantless exception allows police to arrest a suspect fleeing from the scene of the crime?',
    'choices'     => json_encode([
        'Hot pursuit',
        'Search incident to arrest',
        'Plain view doctrine',
        'Exigent circumstances',
    ]),
    'answer'      => 'Hot pursuit',
    'explanation' => 'Hot pursuit permits warrantless entry when chasing a fleeing felon to prevent escape.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which interview method employs non-accusatory, open-ended questions to elicit information?',
    'choices'     => json_encode([
        'Cognitive interview',
        'Reid technique',
        'Interrogation',
        'Hostile questioning',
    ]),
    'answer'      => 'Cognitive interview',
    'explanation' => 'Cognitive interviews help witnesses recall events through memory retrieval cues.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'What legal provision governs the official use of surveillance devices by law enforcement?',
    'choices'     => json_encode([
        'Anti-Wiretapping Law',
        'Cybercrime Prevention Act',
        'Human Security Act',
        'Data Privacy Act',
    ]),
    'answer'      => 'Anti-Wiretapping Law',
    'explanation' => 'Republic Act 4200 regulates interception of communications and requires court orders.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which principle requires investigators to maintain the chain of custody for evidence?',
    'choices'     => json_encode([
        'Evidence integrity principle',
        'Presumption of innocence',
        'Exclusionary rule',
        'Best evidence rule',
    ]),
    'answer'      => 'Evidence integrity principle',
    'explanation' => 'Maintaining custody prevents tampering and ensures admissibility in court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which search exception allows entry when evidence destruction is imminent?',
    'choices'     => json_encode([
        'Exigent circumstances',
        'Consent',
        'Search incident to arrest',
        'Plain view',
    ]),
    'answer'      => 'Exigent circumstances',
    'explanation' => 'Exigent circumstances permit warrantless searches to prevent loss of evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which diagrammatic representation shows the relationship between evidence items and the scene?',
    'choices'     => json_encode([
        'Link diagram',
        'Floor plan sketch',
        'Elevation sketch',
        'Panoramic sketch',
    ]),
    'answer'      => 'Link diagram',
    'explanation' => 'Link diagrams map connections among suspects, victims, and evidence for analysis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which element of investigative reports details the steps taken to process evidence?',
    'choices'     => json_encode([
        'Methodology section',
        'Conclusion section',
        'Background section',
        'Summary section',
    ]),
    'answer'      => 'Methodology section',
    'explanation' => 'The methodology outlines procedures, tools, and techniques used during investigation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which legal doctrine prohibits evidence obtained in violation of constitutional rights?',
    'choices'     => json_encode([
        'Exclusionary rule',
        'Fruit of the poisoned tree',
        'Res ipsa loquitur',
        'Stare decisis',
    ]),
    'answer'      => 'Exclusionary rule',
    'explanation' => 'Evidence illegally obtained is inadmissible under the exclusionary rule.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which term refers to the legal process of obtaining recorded statements from suspects under oath?',
    'choices'     => json_encode([
        'Interrogation',
        'Interview',
        'Cross-examination',
        'Deposition',
    ]),
    'answer'      => 'Deposition',
    'explanation' => 'Depositions are recorded testimonies taken under oath outside of court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which investigative principle mandates that evidence be collected at the earliest opportunity?',
    'choices'     => json_encode([
        'Promptness principle',
        'Chain of custody principle',
        'Probable cause principle',
        'Best evidence principle',
    ]),
    'answer'      => 'Promptness principle',
    'explanation' => 'Investigators must act quickly to preserve perishable or transient evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 1,
    'question'    => 'Which scene marking device indicates the exact point of evidence recovery?',
    'choices'     => json_encode([
        'Evidence flag',
        'Barrier tape',
        'Traffic cone',
        'Survey marker',
    ]),
    'answer'      => 'Evidence flag',
    'explanation' => 'Evidence flags mark precise locations of items for photography and documentation.',
    'created_at'  => $now,
    'updated_at'  => $now,
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
