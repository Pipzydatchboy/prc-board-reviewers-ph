<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart5Seeder extends Seeder
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

// 1
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which learning theory posits that behavior is shaped by its consequences through reinforcement and punishment?',
  'choices'     => json_encode([
    'Operant conditioning',
    'Classical conditioning',
    'Social learning theory',
    'Cognitive theory',
  ]),
  'answer'      => 'Operant conditioning',
  'explanation' => 'Operant conditioning, developed by B.F. Skinner, focuses on reinforcement and punishment to modify behavior.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Cognitive theory in human behavior emphasizes the role of which process?',
  'choices'     => json_encode([
    'Thought patterns',
    'Genetic predisposition',
    'Social structures',
    'Unconscious drives',
  ]),
  'answer'      => 'Thought patterns',
  'explanation' => 'Cognitive theory holds that maladaptive thought patterns influence emotions and behavior.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Psychodynamic theory, founded by Freud, suggests behavior is driven primarily by:',
  'choices'     => json_encode([
    'Unconscious conflicts',
    'Rational choice',
    'Social learning',
    'Physiological needs',
  ]),
  'answer'      => 'Unconscious conflicts',
  'explanation' => 'Freudian psychodynamic theory posits that unconscious drives and conflicts shape behavior.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Maslow’s hierarchy of needs places which need at the base of the pyramid?',
  'choices'     => json_encode([
    'Physiological needs',
    'Safety needs',
    'Love/belonging needs',
    'Self-actualization',
  ]),
  'answer'      => 'Physiological needs',
  'explanation' => 'Basic physiological needs (food, water, shelter) are the foundation for higher-level needs.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'In the DSM‑5, which category includes generalized anxiety disorder and panic disorder?',
  'choices'     => json_encode([
    'Anxiety disorders',
    'Mood disorders',
    'Psychotic disorders',
    'Personality disorders',
  ]),
  'answer'      => 'Anxiety disorders',
  'explanation' => 'Generalized anxiety disorder and panic disorder are classified under anxiety disorders in DSM‑5.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which ICD‑10 code category covers schizophrenia, schizotypal, and delusional disorders?',
  'choices'     => json_encode([
    'F20–F29',
    'F30–F39',
    'F40–F48',
    'F50–F59',
  ]),
  'answer'      => 'F20–F29',
  'explanation' => 'ICD‑10 codes F20–F29 pertain to schizophrenia, schizotypal, and delusional disorders.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'A psychological crisis is best defined as a situation where:',
  'choices'     => json_encode([
    'Coping mechanisms fail to resolve stress',
    'Routine urges go unfulfilled',
    'Biological needs are unmet',
    'Social norms are violated',
  ]),
  'answer'      => 'Coping mechanisms fail to resolve stress',
  'explanation' => 'A crisis occurs when usual coping responses are inadequate to manage stressors.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which acronym describes the five stages of crisis intervention: Rapport, Information, Brainstorm, Plan, and Follow-up?',
  'choices'     => json_encode([
    'RICAS',
    'ABCER',
    'SAFER',
    'CISD',
  ]),
  'answer'      => 'RICAS',
  'explanation' => 'RICAS outlines stages: Rapport, Information gathering, Collaboration, Action planning, and Support follow‑up.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Critical Incident Stress Debriefing (CISD) is typically conducted:',
  'choices'     => json_encode([
    'Within 24–72 hours post‑incident',
    'Immediately during the incident',
    'One month after the incident',
    'Only if requested by management',
  ]),
  'answer'      => 'Within 24–72 hours post‑incident',
  'explanation' => 'CISD aims to process traumatic events shortly after to mitigate long‑term stress reactions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'The SLAP model for suicide risk assessment stands for:',
  'choices'     => json_encode([
    'Suicidal intent, Lethality, Availability of means, Proximity to help',
    'Support, Love, Affection, Protection',
    'Stress, Loss, Anxiety, Panic',
    'Signs, Labels, Actions, Procedures',
  ]),
  'answer'      => 'Suicidal intent, Lethality, Availability of means, Proximity to help',
  'explanation' => 'SLAP assesses intent, lethality of method, availability of means, and proximity to intervention.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'In crisis management, the Incident Command System (ICS) is used to:',
  'choices'     => json_encode([
    'Organize roles and responsibilities during an incident',
    'Diagnose mental health disorders',
    'Train officers in ethics',
    'Conduct community surveys',
  ]),
  'answer'      => 'Organize roles and responsibilities during an incident',
  'explanation' => 'ICS provides a standardized structure for managing emergencies and organizing resources.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'An After-Action Review (AAR) is conducted to:',
  'choices'     => json_encode([
    'Evaluate performance and identify lessons learned',
    'Punish responsible personnel',
    'Archive incident photographs',
    'Schedule the next drill',
  ]),
  'answer'      => 'Evaluate performance and identify lessons learned',
  'explanation' => 'AARs analyze what occurred, why, and how to improve future responses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'The “hotwash” in incident response refers to:',
  'choices'     => json_encode([
    'Immediate debriefing post‑incident',
    'Use of thermal imaging equipment',
    'First aid for burns',
    'Evacuation drill',
  ]),
  'answer'      => 'Immediate debriefing post‑incident',
  'explanation' => 'A hotwash is a quick debrief to capture initial observations and issues immediately after an event.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which principle dictates that use of force in a crisis must be the minimum required?',
  'choices'     => json_encode([
    'Minimum force',
    'Maximum force',
    'Absolute force',
    'Discriminatory force',
  ]),
  'answer'      => 'Minimum force',
  'explanation' => 'Minimum force ensures response is no more than necessary to control a threat.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which stage of crisis intervention focuses on developing coping strategies and plans?',
  'choices'     => json_encode([
    'Planning',
    'Assessment',
    'Follow‑up',
    'Engagement',
  ]),
  'answer'      => 'Planning',
  'explanation' => 'Planning involves selecting appropriate coping strategies and support resources.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'A capable guardian in routine activity theory may include:',
  'choices'     => json_encode([
    'A watchful neighbor',
    'A professional offender',
    'A secluded location',
    'A hidden target',
  ]),
  'answer'      => 'A watchful neighbor',
  'explanation' => 'A capable guardian can deter crime by monitoring or intervening in potential offenses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which response team specializes in resolving hostage situations?',
  'choices'     => json_encode([
    'Crisis Negotiation Team',
    'SWAT Team',
    'Forensic Team',
    'Medical Team',
  ]),
  'answer'      => 'Crisis Negotiation Team',
  'explanation' => 'Crisis negotiation teams use communication strategies to resolve hostage crises peacefully.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which process involves defusing emotional tension before cognitive processing in crisis intervention?',
  'choices'     => json_encode([
    'Stabilization',
    'Debriefing',
    'Referral',
    'Assessment',
  ]),
  'answer'      => 'Stabilization',
  'explanation' => 'Stabilization aims to reduce immediate distress to prepare the individual for further intervention.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which ethical concern is paramount when conducting crisis debriefings?',
  'choices'     => json_encode([
    'Confidentiality',
    'Profitability',
    'Promotion',
    'Account closure',
  ]),
  'answer'      => 'Confidentiality',
  'explanation' => 'Protecting personal information and ensuring privacy is critical in crisis debriefings.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 5,
  'question'    => 'Which tool helps first responders assess scene safety before engagement?',
  'choices'     => json_encode([
    'Scene assessment checklist',
    'Subject interview form',
    'Budget worksheet',
    'Headcount log',
  ]),
  'answer'      => 'Scene assessment checklist',
  'explanation' => 'A checklist guides responders through hazards, ensuring safety before entering an incident scene.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
