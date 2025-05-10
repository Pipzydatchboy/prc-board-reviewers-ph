<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart7Seeder extends Seeder
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

$batch = [
    //1
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which NFPA standard specifies investigator qualifications and ethical conduct?',
        'choices'     => json_encode([
            'NFPA 1033',
            'NFPA 921',
            'NFPA 1',
            'NFPA 72',
        ]),
        'answer'      => 'NFPA 1033',
        'explanation' => 'NFPA 1033 defines professional qualifications and ethical guidelines for fire investigators.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which pattern would suggest fire traveled through a door opening?',
        'choices'     => json_encode([
            'U-shaped char on floor near threshold',
            'V-pattern on walls',
            'Pour pattern at center',
            'Alligatoring on wood',
        ]),
        'answer'      => 'U-shaped char on floor near threshold',
        'explanation' => 'A U-shaped burn on the floor indicates fire passed beneath a door opening.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which device is used to capture volatile hydrocarbons at low levels for lab analysis?',
        'choices'     => json_encode([
            'Activated charcoal sorbent tube',
            'pH paper strip',
            'Moisture meter',
            'Depth gauge',
        ]),
        'answer'      => 'Activated charcoal sorbent tube',
        'explanation' => 'Charcoal tubes adsorb trace accelerant vapors for subsequent GC-MS analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which principle ensures investigators remain impartial?',
        'choices'     => json_encode([
            'Scientific skepticism',
            'Assume arson',
            'Conclude early',
            'Rely on rumors',
        ]),
        'answer'      => 'Scientific skepticism',
        'explanation' => 'Maintaining skepticism prevents bias and supports objective, evidence-based conclusions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which sign indicates smoke layer interface (neutral plane) movement?',
        'choices'     => json_encode([
            'Soot deposit line on walls',
            'Alligatoring on wood',
            'Pour pattern on floor',
            'Arc mapping',
        ]),
        'answer'      => 'Soot deposit line on walls',
        'explanation' => 'A distinct soot line marks the interface between hot smoke above and cooler air below.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which lighting technique best reveals subtle burn patterns?',
        'choices'     => json_encode([
            'Raking light at low angle',
            'Bright overhead flood',
            'Ultraviolet only',
            'Flashlight head-on',
        ]),
        'answer'      => 'Raking light at low angle',
        'explanation' => 'Low-angle light casts shadows in depressions, making patterns more visible.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which characteristic of debris sampling preserves layer integrity?',
        'choices'     => json_encode([
            'Gather intact slabs with minimal disturbance',
            'Shovel freely',
            'Mix layers together',
            'Wet debris first',
        ]),
        'answer'      => 'Gather intact slabs with minimal disturbance',
        'explanation' => 'Removing intact sections preserves vertical stratigraphy of accelerant residues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which term describes the theoretical framework guiding fire investigations?',
        'choices'     => json_encode([
            'Scientific method',
            'Trial-and-error',
            'Instinct method',
            'Random sampling',
        ]),
        'answer'      => 'Scientific method',
        'explanation' => 'Applying hypothesis, experimentation, and analysis provides a systematic investigation approach.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which documentation is essential before moving any evidence?',
        'choices'     => json_encode([
            'Photographs of original location',
            'Witness statements',
            'Weather log only',
            'No documentation needed',
        ]),
        'answer'      => 'Photographs of original location',
        'explanation' => 'Photographs record exact positions before disturbance, critical for reconstruction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which pattern forms when accelerant drips against vertical surface?',
        'choices'     => json_encode([
            'Streaking residue lines',
            'U-shaped char on floor',
            'V-pattern on walls',
            'Alligatoring on wood',
        ]),
        'answer'      => 'Streaking residue lines',
        'explanation' => 'Accelerant running down walls leaves irregular streaks of deeper charring or residue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which form is used to log transfer of evidence from scene to lab?',
        'choices'     => json_encode([
            'Chain-of-custody form',
            'Scene sketch',
            'Interview report',
            'Fire report',
        ]),
        'answer'      => 'Chain-of-custody form',
        'explanation' => 'This form tracks each individual who handled evidence, maintaining integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which indicator on rubber tubing suggests pre-fire heat damage?',
        'choices'     => json_encode([
            'Cracking and brittleness',
            'Smooth melted pools',
            'Ash residue only',
            'No change',
        ]),
        'answer'      => 'Cracking and brittleness',
        'explanation' => 'Pre-fire heating causes rubber to shrink and become brittle, unlike post-fire melting.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which pattern indicates downward fire spread through openings?',
        'choices'     => json_encode([
            'Circular scorch spots directly below',
            'V-pattern on walls',
            'Pour pattern on floor center',
            'Alligatoring on wood',
        ]),
        'answer'      => 'Circular scorch spots directly below',
        'explanation' => 'Dripping embers or hot gases produce round burn marks on surfaces below openings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which sampling container is recommended for ignitable liquid debris?',
        'choices'     => json_encode([
            'Airtight metal can',
            'Plastic bag',
            'Paper bag',
            'Open glass jar',
        ]),
        'answer'      => 'Airtight metal can',
        'explanation' => 'Metal cans prevent vapor loss and static buildup, preserving volatile evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which interview practice helps avoid memory contamination?',
        'choices'     => json_encode([
            'Interview individual witnesses separately',
            'Group interviews',
            'Suggest possible scenarios',
            'Ask leading questions',
        ]),
        'answer'      => 'Interview individual witnesses separately',
        'explanation' => 'Separate interviews prevent witnesses from influencing each other’s recollections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which procedure should follow a positive field test for accelerant?',
        'choices'     => json_encode([
            'Collect sample for GC-MS',
            'Discard sample',
            'Ignore result',
            'Drench area with water',
        ]),
        'answer'      => 'Collect sample for GC-MS',
        'explanation' => 'Positive field indications warrant lab confirmation via GC-MS for legal evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which concept refers to the path hot gases and smoke travel?',
        'choices'     => json_encode([
            'Flow path',
            'Ventilation profile',
            'Draft pattern',
            'Smoke track',
        ]),
        'answer'      => 'Flow path',
        'explanation' => 'Flow path is the route of travel for heat and smoke from origin to exhaust point.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which pattern suggests rapid fire growth to flashover?',
        'choices'     => json_encode([
            'Uniform char across multiple surfaces',
            'Localized drip spots',
            'Pour patterns only',
            'V-pattern only',
        ]),
        'answer'      => 'Uniform char across multiple surfaces',
        'explanation' => 'Flashover yields widespread ignition, charring many surfaces uniformly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which record must note time stamps for each evidence transfer?',
        'choices'     => json_encode([
            'Chain-of-custody form',
            'Sketch',
            'Interview notes',
            'Weather log',
        ]),
        'answer'      => 'Chain-of-custody form',
        'explanation' => 'Time stamps on custody records ensure precise tracking of evidence movement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 7,
        'question'    => 'Which factor MOST hinders pattern recognition in heavy smoke conditions?',
        'choices'     => json_encode([
            'Thick sooty deposits obscuring underlying char',
            'Wet debris',
            'Daylight illumination',
            'Uniform fire spread',
        ]),
        'answer'      => 'Thick sooty deposits obscuring underlying char',
        'explanation' => 'Heavy soot can fill in patterns, making original burn char difficult to see.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
