<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which burn pattern indicates fire progression along a joist bay?',
        'choices'     => json_encode([
            'Parallel char lines between joists',
            'V-pattern on walls',
            'Pour spots on floor',
            'Alligatoring on wood beams',
        ]),
        'answer'      => 'Parallel char lines between joists',
        'explanation' => 'Fire traveling along joist spaces chars the underside of decking in parallel lines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which chemical field test can presumptively detect petroleum distillates?',
        'choices'     => json_encode([
            'OB-HexANE Fast Blue test',
            'Ninhydrin',
            'pH paper',
            'Moisture meter',
        ]),
        'answer'      => 'OB-HexANE Fast Blue test',
        'explanation' => 'Fast Blue reagent reacts with hydrocarbons to produce a color change in presence of petroleum.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which evidence is most critical to document when identifying a backdraft?',
        'choices'     => json_encode([
            'Soot-stained windows and v-patterns inward',
            'Pour patterns on floor',
            'Alligatoring on wood',
            'Arc mapping on wiring',
        ]),
        'answer'      => 'Soot-stained windows and v-patterns inward',
        'explanation' => 'Inward-pointing v-patterns and heavy soot on glass indicate possible backdraft conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which tool is best for mapping residual heat after overhaul?',
        'choices'     => json_encode([
            'Infrared imaging camera',
            'Depth gauge',
            'Moisture meter',
            'Pitot gauge',
        ]),
        'answer'      => 'Infrared imaging camera',
        'explanation' => 'Thermal imagers reveal hidden hotspots and residual heat patterns post-extinguishment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which pattern suggests flashover rather than simple lateral spread?',
        'choices'     => json_encode([
            'Consistent charring on ceiling and upper walls',
            'Localized pour spots',
            'V-patterns only',
            'Arc mapping on trim',
        ]),
        'answer'      => 'Consistent charring on ceiling and upper walls',
        'explanation' => 'Flashover produces uniform involvement of all exposed surfaces, not isolated patterns.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which documentation method preserves three-dimensional context of scene evidence?',
        'choices'     => json_encode([
            'Laser scanning (LiDAR)',
            'Flat photography',
            'Hand-drawn two-dimensional sketches',
            'Notebook notes only',
        ]),
        'answer'      => 'Laser scanning (LiDAR)',
        'explanation' => '3D laser scanning captures precise spatial relationships and evidence positions volumetrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which indicator on electrical devices differentiates pre-fire from post-fire damage?',
        'choices'     => json_encode([
            'Arc bead formation on conductors',
            'Smooth melted plastic',
            'Fine ash deposits',
            'Uniform char',
        ]),
        'answer'      => 'Arc bead formation on conductors',
        'explanation' => 'Arc beads form from electrical arcing at energized circuits prior to fire engulfment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which procedure is required before moving heavy debris?',
        'choices'     => json_encode([
            'Photograph and sketch debris in place',
            'Lift immediately',
            'Drench with water',
            'Conduct field test in hand',
        ]),
        'answer'      => 'Photograph and sketch debris in place',
        'explanation' => 'Documenting heavy items before relocation preserves context and evidence position.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which lab analysis confirms presence of ignitable liquid residues?',
        'choices'     => json_encode([
            'Gas chromatography-mass spectrometry (GC-MS)',
            'pH testing',
            'Density measurement',
            'Thermal gravimetry',
        ]),
        'answer'      => 'Gas chromatography-mass spectrometry (GC-MS)',
        'explanation' => 'GC-MS separates and identifies complex hydrocarbon mixtures from debris samples.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which concept ensures reproducibility of investigative conclusions?',
        'choices'     => json_encode([
            'Scientific method',
            'Speculation',
            'Rapid assumption',
            'Anecdote reliance',
        ]),
        'answer'      => 'Scientific method',
        'explanation' => 'Adhering to hypothesis testing and systematic analysis underpins objective, repeatable findings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which pattern on a ceiling below a drop-down panel indicates hidden fire spread?',
        'choices'     => json_encode([
            'Char staining on underside of panel',
            'Pour patterns on floor',
            'V-patterns on walls',
            'Arc mapping on joist',
        ]),
        'answer'      => 'Char staining on underside of panel',
        'explanation' => 'Char beneath a dropped panel shows fire traveled in the concealed cavity above.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which evidence container must be electrically grounded to prevent static ignition?',
        'choices'     => json_encode([
            'Metal evidence can',
            'Paper bag',
            'Plastic jar',
            'Glass jar',
        ]),
        'answer'      => 'Metal evidence can',
        'explanation' => 'Grounding metal cans dissipates static, reducing ignition risk of volatile vapors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which pattern indicates “rollover” conditions at the ceiling?',
        'choices'     => json_encode([
            'Flame streaks on ceiling tiles',
            'V-patterns on walls',
            'Alligatoring only',
            'Pour spots',
        ]),
        'answer'      => 'Flame streaks on ceiling tiles',
        'explanation' => 'Rollover creates isolated flame tongues across the ceiling prior to full flashover.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which legal principle preserves usability of evidence in court?',
        'choices'     => json_encode([
            'Chain of custody',
            'Frye standard',
            'Exclusionary rule',
            'Fruit of the poisonous tree',
        ]),
        'answer'      => 'Chain of custody',
        'explanation' => 'Proper custody documentation ensures evidence integrity and admissibility in legal proceedings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which pattern differentiation distinguishes smoldering from flaming combustion?',
        'choices'     => json_encode([
            'Heavy dark smoke residue with minimal char',
            'Bright V-patterns',
            'Pour spots',
            'Arc mapping',
        ]),
        'answer'      => 'Heavy dark smoke residue with minimal char',
        'explanation' => 'Smoldering leaves dense sooty deposits but limited burning of substrates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which documentation method best records spatial layout for complex scenes?',
        'choices'     => json_encode([
            '3D photogrammetry',
            '2D hand sketch',
            'Notebook text only',
            'Single perspective photograph',
        ]),
        'answer'      => '3D photogrammetry',
        'explanation' => 'Photogrammetric models reconstruct accurate 3D representations of the scene for analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which debris characteristic may mask burn patterns and must be noted?',
        'choices'     => json_encode([
            'Water-soaked firefighter turnout gear',
            'Paper bag fragments',
            'Metal shavings',
            'Glass shards',
        ]),
        'answer'      => 'Water-soaked firefighter turnout gear',
        'explanation' => 'Gear worn by crews can introduce moisture and particulates that obscure original patterns.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which sampling depth is recommended for layered debris analysis?',
        'choices'     => json_encode([
            'Top 2–3 inches',
            'Only surface ash',
            'Entire debris pile mixed',
            'Bottom layer only',
        ]),
        'answer'      => 'Top 2–3 inches',
        'explanation' => 'Surface layers often retain accelerants; sampling top 2–3″ captures residues without dilution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which fire pattern indicates rapid flame spread through an open doorway?',
        'choices'     => json_encode([
            'V-pattern on wall opposite door',
            'Circular pour spots',
            'Alligatoring on wood',
            'Arc mapping',
        ]),
        'answer'      => 'V-pattern on wall opposite door',
        'explanation' => 'Heat jets through the opening, creating V-shaped char on the opposite wall.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 8,
        'question'    => 'Which practice ensures ethical treatment of victims’ property during investigation?',
        'choices'     => json_encode([
            'Notify and obtain consent before moving personal effects',
            'Ignore owner requests',
            'Dispose unwanted items immediately',
            'Collect everything regardless',
        ]),
        'answer'      => 'Notify and obtain consent before moving personal effects',
        'explanation' => 'Respecting ownership and privacy by seeking permission maintains trust and ethics.',
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
