<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart9Seeder extends Seeder
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
    // 1
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which evidence type is MOST perishable at a fire scene?',
        'choices'     => json_encode([
            'Wet debris with accelerant residues',
            'Metal fragments',
            'Glass shards',
            'Brick pieces',
        ]),
        'answer'      => 'Wet debris with accelerant residues',
        'explanation' => 'Moist debris can lose volatile compounds and grow mold, rapidly degrading evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which field instrument measures smoke layer height in large compartments?',
        'choices'     => json_encode([
            'Smoke height probe',
            'Thermal imager',
            'Pitot tube',
            'Flow switch',
        ]),
        'answer'      => 'Smoke height probe',
        'explanation' => 'Smoke probes gauge layer interfaces by sampling air at varying heights within a space.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which burn characteristic indicates post-flashover burning?',
        'choices'     => json_encode([
            'Deep char and melted materials throughout',
            'Only low-level charring',
            'Localized pour spots',
            'Arc mapping evidence',
        ]),
        'answer'      => 'Deep char and melted materials throughout',
        'explanation' => 'Post-flashover fire involves all combustibles, producing uniform deep char and melting.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which sample preservation prevents loss of light-end hydrocarbons?',
        'choices'     => json_encode([
            'Seal in airtight metal can immediately',
            'Place in paper bag',
            'Leave uncovered',
            'Wrap in cloth',
        ]),
        'answer'      => 'Seal in airtight metal can immediately',
        'explanation' => 'Air-tight metal cans retain volatile compounds better than porous or plastic containers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which documentation is required for each photograph taken?',
        'choices'     => json_encode([
            'Date, time, location, and photographer',
            'Camera model only',
            'Subject label only',
            'No details needed',
        ]),
        'answer'      => 'Date, time, location, and photographer',
        'explanation' => 'Complete metadata ensures authenticity and traceability of photographic evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which interview setting minimizes external distractions?',
        'choices'     => json_encode([
            'Quiet private area at scene perimeter',
            'Busy command center',
            'Near ongoing firefighting',
            'Inside smoky structure',
        ]),
        'answer'      => 'Quiet private area at scene perimeter',
        'explanation' => 'A calm, private location helps witnesses focus and recall details accurately.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which pattern on a floor indicates fire rolled up a vertical surface?',
        'choices'     => json_encode([
            'Circular ring charring around base of column',
            'Pour spots only',
            'V-patterns on walls',
            'Alligatoring on wood',
        ]),
        'answer'      => 'Circular ring charring around base of column',
        'explanation' => 'Rollover can deposit burning droplets that char a ring at column bases or appliances.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which record tracks the condition of evidence packaging?',
        'choices'     => json_encode([
            'Chain-of-custody form',
            'Fire report',
            'Sketch',
            'Interview notes',
        ]),
        'answer'      => 'Chain-of-custody form',
        'explanation' => 'The custody log notes package integrity and any seal breaks during evidence handling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which lab result is critical for correlating field and laboratory findings?',
        'choices'     => json_encode([
            'GC-MS chromatogram match',
            'Moisture content report',
            'Depth gauge reading',
            'Photographic prints',
        ]),
        'answer'      => 'GC-MS chromatogram match',
        'explanation' => 'Matching chromatographic fingerprints confirms presence of same accelerant found at scene.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which condition compromises suspect interviews?',
        'choices'     => json_encode([
            'Presence of media and public',
            'Private setting',
            'Miranda warning given',
            'Consent obtained',
        ]),
        'answer'      => 'Presence of media and public',
        'explanation' => 'Public and media can intimidate or influence suspects, undermining interview integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which tool determines if hot spots remain behind walls?',
        'choices'     => json_encode([
            'Thermal imaging camera',
            'Depth gauge',
            'Pitot gauge',
            'pH strips',
        ]),
        'answer'      => 'Thermal imaging camera',
        'explanation' => 'Thermal imagers reveal residual heat through wall assemblies, guiding further inspection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which factor MOST influences the rate of soot deposition?',
        'choices'     => json_encode([
            'Ventilation flow velocity',
            'Debris moisture',
            'Char depth',
            'Temperature only',
        ]),
        'answer'      => 'Ventilation flow velocity',
        'explanation
        ' => 'Higher smoke flow rates deposit soot further from the origin and along airflow paths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which pattern indicates fire extinguishment prior to overhaul?',
        'choices'     => json_encode([
            'Sharp demarcation between charred and unburned areas',
            'Uniform char everywhere',
            'Multiple pour spots',
            'Arc mapping',
        ]),
        'answer'      => 'Sharp demarcation between charred and unburned areas',
        'explanation' => 'Clear edges show fire was stopped before reaching adjacent areas during extinguishment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which container material is LEAST recommended for accelerant debris?',
        'choices'     => json_encode([
            'Paper bag',
            'Metal can',
            'Glass jar',
            'Activated charcoal tube',
        ]),
        'answer'      => 'Paper bag',
        'explanation' => 'Paper is porous and allows vapor loss and cross-contamination of volatile residues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which device records exact GPS coordinates of evidence?',
        'choices'     => json_encode([
            'GPS-enabled camera',
            'Depth gauge',
            'Pitot gauge',
            'Flow switch',
        ]),
        'answer'      => 'GPS-enabled camera',
        'explanation' => 'GPS cameras embed location data in metadata for precise mapping of evidence positions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which burn attribute indicates slow smoldering rather than flaming?',
        'choices'     => json_encode([
            'Heavy dark smoke residue with limited flame spread',
            'Deep charring throughout',
            'Uniform melted metal',
            'Alligatoring',
        ]),
        'answer'      => 'Heavy dark smoke residue with limited flame spread',
        'explanation' => 'Smoldering yields dense smoke deposits but minimal visible flame burn patterns.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which pattern on a ceiling indicates “rollover” before flashover?',
        'choices'     => json_encode([
            'Isolated flame tongues and char streaks',
            'Uniform char',
            'Pour spots on floor',
            'Arc mapping',
        ]),
        'answer'      => 'Isolated flame tongues and char streaks',
        'explanation' => 'Rollover produces discrete flame streaks along ceilings before full compartment involvement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which factor MOST complicates scene reconstruction?',
        'choices'     => json_encode([
            'Extensive overhaul disturbance',
            'Clear photography',
            'Detailed sketch',
            'Good weather',
        ]),
        'answer'      => 'Extensive overhaul disturbance',
        'explanation' => 'Post-fire operations can displace or destroy key evidence needed for reconstruction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which chemical indicator test is prone to false positives from cleaning solvents?',
        'choices'     => json_encode([
            'Fast Blue test',
            'pH test for acids',
            'Moisture meter reading',
            'Depth gauge measurement',
        ]),
        'answer'      => 'Fast Blue test',
        'explanation' => 'Some cleaning agents react similarly to accelerants, causing misleading Fast Blue results.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 44,
        'part'        => 9,
        'question'    => 'Which practice supports validity of investigator conclusions?',
        'choices'     => json_encode([
            'Peer review of findings',
            'Solo analysis without oversight',
            'Selective evidence use',
            'Ignoring contradictory data',
        ]),
        'answer'      => 'Peer review of findings',
        'explanation' => 'Independent review ensures conclusions are scrutinized and robust against bias.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}
