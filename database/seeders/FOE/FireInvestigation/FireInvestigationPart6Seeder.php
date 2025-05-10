<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Which indicator on plastic wiring insulation suggests pre-fire heating rather than post-fire damage?',
        'choices'     => json_encode([
            'Brittle shrinkage and cracking',
            'Smooth melting droplets',
            'Ash residue only',
            'No change',
        ]),
        'answer'      => 'Brittle shrinkage and cracking',
        'explanation' => 'Pre-fire heat causes insulation to shrink and crack brittlely; post-fire melting produces droplets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which tool is used to collect gas vapor samples at a scene for lab analysis?',
        'choices'     => json_encode([
            'Charcoal sorbent tube',
            'Moisture meter',
            'Depth gauge',
            'pH paper',
        ]),
        'answer'      => 'Charcoal sorbent tube',
        'explanation' => 'Charcoal tubes adsorb volatile hydrocarbons for later GC-MS analysis in the lab.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which method best preserves fragile soot patterns on glass for documentation?',
        'choices'     => json_encode([
            'Photograph with raking light',
            'Wipe gently',
            'Swab with solvent',
            'Drench with water',
        ]),
        'answer'      => 'Photograph with raking light',
        'explanation' => 'Low-angle lighting highlights soot deposit relief without disturbing the pattern.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which pattern on wood flooring indicates downward burning of dripping accelerant?',
        'choices'     => json_encode([
            'Circular pour spots',
            'Linear V-patterns',
            'Alligatoring',
            'Arc mapping',
        ]),
        'answer'      => 'Circular pour spots',
        'explanation' => 'Drips form round, irregularly shaped burn spots where accelerant burnt downward.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which sampling practice minimizes cross-contamination between adjacent burn areas?',
        'choices'     => json_encode([
            'Change tools and gloves between areas',
            'Use same container for all',
            'Collect loosely',
            'Sweep into one bag',
        ]),
        'answer'      => 'Change tools and gloves between areas',
        'explanation' => 'Using fresh gloves and tools for each sample prevents transfer of residues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which indicator on masonry blocks suggests fire progression through a concealed cavity?',
        'choices'     => json_encode([
            'Staining underneath block joints',
            'Uniform surface charring',
            'Pour patterns',
            'V-patterns',
        ]),
        'answer'      => 'Staining underneath block joints',
        'explanation' => 'Smoke and soot track through hollow block cores, staining the undersides at joints.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which procedure ensures proper labelling of layered debris samples?',
        'choices'     => json_encode([
            'Mark lid and container side with layer depth',
            'Label only the outer box',
            'Use generic “debris” label',
            'No label needed',
        ]),
        'answer'      => 'Mark lid and container side with layer depth',
        'explanation' => 'Identifying depth on both lid and container maintains sample stratigraphy information.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which instrument measures post-fire moisture to assess firefighting water impact?',
        'choices'     => json_encode([
            'Moisture meter',
            'Depth gauge',
            'Thermal camera',
            'pH strips',
        ]),
        'answer'      => 'Moisture meter',
        'explanation' => 'Moisture meters quantify retained water to distinguish fire damage from water damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which pattern indicates fire upward travel in a closed compartment?',
        'choices'     => json_encode([
            'Inverted V burn patterns on walls',
            'Circular pour spots',
            'Ash only at floor',
            'Arc marks',
        ]),
        'answer'      => 'Inverted V burn patterns on walls',
        'explanation' => 'Heat and flame spread upward and outward, creating inverted V-shaped char.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which evidence handling step follows initial packaging at scene?',
        'choices'     => json_encode([
            'Seal and label container immediately',
            'Leave unsealed',
            'Mix with other samples',
            'Drench with water',
        ]),
        'answer'      => 'Seal and label container immediately',
        'explanation' => 'Sealing and labeling locks in vapors and preserves chain of custody from the start.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which document records environmental conditions affecting evidence preservation?',
        'choices'     => json_encode([
            'Weather log',
            'Sketch',
            'Interview notes',
            'Evidence log',
        ]),
        'answer'      => 'Weather log',
        'explanation' => 'Temperature, humidity, and wind can alter patterns and volatile residues if not noted.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which lab technique distinguishes between similar hydrocarbon mixtures?',
        'choices'     => json_encode([
            'GC-MS',
            'pH testing',
            'Moisture analysis',
            'Density measurement',
        ]),
        'answer'      => 'GC-MS',
        'explanation' => 'Gas chromatography–mass spectrometry separates and identifies closely related compounds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which pattern suggests downward fire spread through a ceiling penetration?',
        'choices'     => json_encode([
            'Circular scorch spot directly below',
            'V-pattern on walls',
            'Pour patterns',
            'Arc mapping',
        ]),
        'answer'      => 'Circular scorch spot directly below',
        'explanation' => 'Dripping embers or hot gases create round scorch areas on the floor below penetrations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which interview note practice enhances reliability?',
        'choices'     => json_encode([
            'Record verbatim quotes when possible',
            'Paraphrase freely',
            'Summarize only conclusions',
            'Ignore pauses',
        ]),
        'answer'      => 'Record verbatim quotes when possible',
        'explanation' => 'Exact phrasing preserves witness meaning and supports courtroom challenges.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which condition MOST complicates collection of debris samples?',
        'choices'     => json_encode([
            'Wet, muddy debris',
            'Dry char only',
            'Concrete surfaces',
            'Metal fragments',
        ]),
        'answer'      => 'Wet, muddy debris',
        'explanation' => 'Moisture can dissolve residues and promote microbial growth, degrading evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which guideline covers use of chemical tests for ignitable liquids at scene?',
        'choices'     => json_encode([
            'NFPA 921',
            'NFPA 1',
            'NFPA 13',
            'NFPA 80',
        ]),
        'answer'      => 'NFPA 921',
        'explanation' => 'NFPA 921 details approved field screening and chemical methods.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which evidence container type prevents static ignition of vapors?',
        'choices'     => json_encode([
            'Grounded metal can',
            'Plastic bag',
            'Paper bag',
            'Glass jar',
        ]),
        'answer'      => 'Grounded metal can',
        'explanation' => 'Grounding dissipates static and metal cans are non-static generating.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which observation indicates a flashover event occurred?',
        'choices'     => json_encode([
            'All surfaces uniformly charred and melted materials',
            'Localized pour spots only',
            'Single V-pattern',
            'No charring',
        ]),
        'answer'      => 'All surfaces uniformly charred and melted materials',
        'explanation' => 'Flashover exposes all contents at once, causing consistent charring and melting.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which practice ensures lab tech knows sample provenance?',
        'choices'     => json_encode([
            'Complete chain-of-custody documentation',
            'Email summary only',
            'Verbal handoff',
            'No record',
        ]),
        'answer'      => 'Complete chain-of-custody documentation',
        'explanation' => 'Full records from scene to lab maintain provenance and admissibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 6,
        'question'    => 'Which term refers to a fire intentionally set for financial gain?',
        'choices'     => json_encode([
            'Incendiary fire',
            'Negligent fire',
            'Natural fire',
            'Accidental fire',
        ]),
        'answer'      => 'Incendiary fire',
        'explanation' => 'Fires set to defraud insurance or cause damage deliberately are incendiary.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
