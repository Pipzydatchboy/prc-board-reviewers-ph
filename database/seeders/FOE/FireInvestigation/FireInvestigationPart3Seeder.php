<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'Which classification describes an accidental fire caused by discarded smoking materials?',
        'choices'     => json_encode([
            'Negligent fire',
            'Incendiary fire',
            'Natural fire',
            'Undetermined fire',
        ]),
        'answer'      => 'Negligent fire',
        'explanation' => 'Fires resulting from careless actions without intent, such as smoldering cigarettes, are negligent.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which rule-of-thumb helps locate the area of origin in a room fire?',
        'choices'     => json_encode([
            'Follow the lowest char depth',
            'Trace the highest soot lines',
            'Identify widest burn patterns',
            'Look for melted metals',
        ]),
        'answer'      => 'Follow the lowest char depth',
        'explanation' => 'Fire burns upward; the shallowest char on surfaces generally indicates the origin point.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which form documents witness statements during an investigation?',
        'choices'     => json_encode([
            'Interview report',
            'Sketch',
            'Evidence log',
            'Fire report',
        ]),
        'answer'      => 'Interview report',
        'explanation' => 'Interview reports capture testimonial details, context, and observed events from witnesses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which indicator suggests a fire spread influenced by ventilation during growth stage?',
        'choices'     => json_encode([
            'Elongated V-patterns toward openings',
            'Symmetrical burn patterns',
            'Minimal soot deposition',
            'Uniform charring',
        ]),
        'answer'      => 'Elongated V-patterns toward openings',
        'explanation' => 'Ventilation openings draw heat and flame, creating stretched V-patterns pointing toward them.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which sample handling procedure prevents cross-contamination in the lab?',
        'choices'     => json_encode([
            'Change gloves between samples',
            'Use single container for all',
            'Store in open plastic bags',
            'Combine similar samples',
        ]),
        'answer'      => 'Change gloves between samples',
        'explanation' => 'Changing gloves and using separate sealed containers preserves sample purity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which pattern forms when fire burns upward through a window opening?',
        'choices'     => json_encode([
            'Upward V-pattern on exterior wall',
            'Pour pattern on sill',
            'Alligatoring on lintel',
            'Arc mapping on frame',
        ]),
        'answer'      => 'Upward V-pattern on exterior wall',
        'explanation' => 'Flame jets through windows create inverted and upward-pointing V-patterns on adjacent walls.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which documentation step should follow evidence collection at scene?',
        'choices'     => json_encode([
            'Update evidence log with chain-of-custody',
            'Discard unused containers',
            'Photograph new anomalies',
            'Re-sketched entire scene',
        ]),
        'answer'      => 'Update evidence log with chain-of-custody',
        'explanation' => 'Immediately logging each transfer maintains continuity and legal admissibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which chemical analysis technique separates complex mixtures into individual compounds?',
        'choices'     => json_encode([
            'Gas chromatography',
            'pH testing',
            'Density measurement',
            'Combustion test',
        ]),
        'answer'      => 'Gas chromatography',
        'explanation' => 'GC separates vapors for identification in accelerant residue analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which field test can screen for presence of gasoline on-site?',
        'choices'     => json_encode([
            'Portable hydrocarbon detector',
            'Lubricity pen test',
            'Moisture meter reading',
            'Thermal imaging scan',
        ]),
        'answer'      => 'Portable hydrocarbon detector',
        'explanation' => 'These detectors provide immediate indication of volatile hydrocarbon vapors at the scene.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which concept ensures evidence remained unchanged from scene to lab?',
        'choices'     => json_encode([
            'Evidence integrity',
            'Pattern analysis',
            'Heat mapping',
            'Ventilation profiling',
        ]),
        'answer'      => 'Evidence integrity',
        'explanation' => 'Maintaining seals and logs preserves integrity throughout handling and analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which pattern indicates fire fell through a collapsed ceiling?',
        'choices'     => json_encode([
            'Conical burn pattern on floor',
            'V-pattern on walls',
            'Alligatoring on wood',
            'Pour pattern on carpet',
        ]),
        'answer'      => 'Conical burn pattern on floor',
        'explanation' => 'Falling burning debris produces a cone-shaped char directly below collapse points.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which interview approach minimizes leading questions?',
        'choices'     => json_encode([
            'Use open-ended, neutral prompts',
            'Suggest answers to witness',
            'Rapid-fire yes/no queries',
            'Multiple-choice format',
        ]),
        'answer'      => 'Use open-ended, neutral prompts',
        'explanation' => 'Neutral, open-ended questions elicit unbiased, free narrative responses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which process helps correlate scene findings with witness testimony?',
        'choices'     => json_encode([
            'Triangulation of data sources',
            'Selective sampling',
            'Single-source reliance',
            'Discard contradictory evidence',
        ]),
        'answer'      => 'Triangulation of data sources',
        'explanation' => 'Comparing physical evidence, witness accounts, and lab results enhances validity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which guideline defines procedure for mapping fire patterns?',
        'choices'     => json_encode([
            'NFPA 921',
            'NFPA 1',
            'NFPA 72',
            'NFPA 13',
        ]),
        'answer'      => 'NFPA 921',
        'explanation' => 'NFPA 921 outlines systematic approaches to pattern documentation and analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which factor MOST complicates scene documentation after overhaul?',
        'choices'     => json_encode([
            'Evidence removal and disturbance',
            'Lighting conditions',
            'Temperature readings',
            'Sketch scale',
        ]),
        'answer'      => 'Evidence removal and disturbance',
        'explanation' => 'Firefighting operations can move debris, obscuring original evidence locations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which term describes the central point of heat concentration?',
        'choices'     => json_encode([
            'Area of origin',
            'Vent point',
            'Flow path',
            'Alligator edge',
        ]),
        'answer'      => 'Area of origin',
        'explanation' => 'The origin is where ignition first occurred and heat was most intense initially.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which tool can detect hidden hot spots in walls post-extinguishment?',
        'choices'     => json_encode([
            'Thermal imaging camera',
            'Depth gauge',
            'Methylene chloride reagent',
            'Flow switch',
        ]),
        'answer'      => 'Thermal imaging camera',
        'explanation' => 'Thermal imagers reveal residual heat behind surfaces that are visually cool.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which classification applies when origin cannot be reasonably determined?',
        'choices'     => json_encode([
            'Undetermined fire',
            'Natural fire',
            'Incendiary fire',
            'Negligent fire',
        ]),
        'answer'      => 'Undetermined fire',
        'explanation' => 'If evidence is inconclusive, the cause is classified as undetermined.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which phrase defines the systematic approach to fire cause analysis?',
        'choices'     => json_encode([
            'Scientific method',
            'Trial and error',
            'Gut instinct',
            'Witness preference',
        ]),
        'answer'      => 'Scientific method',
        'explanation' => 'Applying hypothesis, testing data, and drawing conclusions mirrors scientific inquiry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 3,
        'question'    => 'Which record must accompany physical evidence sent to the laboratory?',
        'choices'     => json_encode([
            'Chain-of-custody form',
            'Sketch only',
            'Witness list',
            'Weather log',
        ]),
        'answer'      => 'Chain-of-custody form',
        'explanation' => 'The form ensures all transfers are tracked to maintain admissibility and integrity.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
