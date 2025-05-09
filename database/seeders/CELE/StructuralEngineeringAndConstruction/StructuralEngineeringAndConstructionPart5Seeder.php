<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart5Seeder extends Seeder
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
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'In prestressed concrete, the total prestress loss due to elastic shortening is typically what percentage of initial prestress?',
        'choices'     => json_encode([
            '5–10%',
            '1–2%',
            '15–20%',
            '25–30%',
        ]),
        'answer'      => '5–10%',
        'explanation' => 'Elastic shortening losses generally range around 5–10% of the initial tendon force.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which deep foundation type transfers load primarily by end bearing into rock strata?',
        'choices'     => json_encode([
            'Drilled shaft',
            'Friction pile',
            'Compaction pile',
            'Timber pile',
        ]),
        'answer'      => 'Drilled shaft',
        'explanation' => 'Drilled shafts (caissons) bear on competent rock or dense strata, end-bearing dominant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which NDT method assesses concrete cover thickness and reinforcement location?',
        'choices'     => json_encode([
            'Covermeter (rebar locator)',
            'Rebound hammer',
            'Ultrasonic pulse velocity',
            'Core drilling',
        ]),
        'answer'      => 'Covermeter (rebar locator)',
        'explanation' => 'Covermeters use electromagnetic pulses to detect bar depth and position.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'In steel erection, what is the primary purpose of plumb bob checks?',
        'choices'     => json_encode([
            'Ensure vertical alignment',
            'Measure bolt torque',
            'Check weld quality',
            'Locate anchor bolts',
        ]),
        'answer'      => 'Ensure vertical alignment',
        'explanation' => 'Plumb bobs verify that columns and bracing are perfectly vertical during erection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which scheduling technique uses a network of activities with longest path determination?',
        'choices'     => json_encode([
            'Critical Path Method (CPM)',
            'Gantt chart',
            'PERT',
            'Bar chart',
        ]),
        'answer'      => 'Critical Path Method (CPM)',
        'explanation' => 'CPM identifies the longest-duration path to determine project minimum completion time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which ISO standard is most relevant to quality management in construction?',
        'choices'     => json_encode([
            'ISO 9001',
            'ISO 14001',
            'ISO 45001',
            'ISO 50001',
        ]),
        'answer'      => 'ISO 9001',
        'explanation' => 'ISO 9001 specifies requirements for a quality management system in any industry, including construction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'During concrete casting, slump should be measured within how many minutes of sampling?',
        'choices'     => json_encode([
            '10 minutes',
            '30 minutes',
            '60 minutes',
            '5 minutes',
        ]),
        'answer'      => '10 minutes',
        'explanation' => 'Standards require testing slump within 10 min of concrete sampling to ensure workability data.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which anchor bolt type provides highest pull-out resistance in concrete?',
        'choices'     => json_encode([
            'Mechanical expansion anchor',
            'Cast-in-place hook bolt',
            'Epoxy-set stud anchor',
            'Wedge anchor',
        ]),
        'answer'      => 'Epoxy-set stud anchor',
        'explanation' => 'Epoxy anchors bond chemically in concrete, offering high pull-out capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which retention technique reduces ground water drawdown during excavation?',
        'choices'     => json_encode([
            'Wellpoint system',
            'Sheet piling',
            'Soil nailing',
            'Micropiles',
        ]),
        'answer'      => 'Wellpoint system',
        'explanation' => 'Wellpoints lower water table around excavation to prevent uplift and instability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'In steel bolted connections, a slip‐critical joint fails by:',
        'choices'     => json_encode([
            'Frictional slip',
            'Bolt shear',
            'Bearing',
            'Tension rupture',
        ]),
        'answer'      => 'Frictional slip',
        'explanation' => 'Slip‐critical joints rely on friction between faying surfaces; failure is by slip.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which concrete test uses a 100 mm diameter drill to assess compressive strength?',
        'choices'     => json_encode([
            'Core test',
            'Rebound hammer',
            'Ultrasonic pulse velocity',
            'Schmidt hammer',
        ]),
        'answer'      => 'Core test',
        'explanation' => 'Concrete cores cored and tested in compression give direct in‐situ strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which method improves bearing capacity by preloading and staged surcharge?',
        'choices'     => json_encode([
            'Preloading with surcharge pads',
            'Dynamic compaction',
            'Jet grouting',
            'Soil replacement',
        ]),
        'answer'      => 'Preloading with surcharge pads',
        'explanation' => 'Surcharge preloading accelerates consolidation and increases bearing capacity over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which safety equipment is mandatory for personnel working at heights?',
        'choices'     => json_encode([
            'Full‐body harness and lanyard',
            'Safety goggles',
            'Ear plugs',
            'Steel‐toe boots',
        ]),
        'answer'      => 'Full‐body harness and lanyard',
        'explanation' => 'Fall‐arrest harnesses are required for work above specified height per safety regulations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which structural analysis software is widely used for building frame analysis?',
        'choices'     => json_encode([
            'ETABS',
            'SAP2000',
            'STAAD.Pro',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'ETABS, SAP2000, and STAAD.Pro are all industry‐standard frame analysis tools.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which term describes the gradual adoption of load by piles under sustained loading?',
        'choices'     => json_encode([
            'Creep settlement',
            'Immediate settlement',
            'Rebound',
            'Swelling',
        ]),
        'answer'      => 'Creep settlement',
        'explanation' => 'Piles exhibit creep under constant load, leading to additional settlement over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which document governs environmental management during construction?',
        'choices'     => json_encode([
            'Environmental Management Plan (EMP)',
            'Quality Management Plan',
            'Safety and Health Plan',
            'Project Specifications',
        ]),
        'answer'      => 'Environmental Management Plan (EMP)',
        'explanation' => 'EMP outlines measures to mitigate environmental impacts on and off site.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which method is used to estimate pile capacity from field results?',
        'choices'     => json_encode([
            'Dynamic pile load test analysis',
            'Static cone test',
            'Standard penetration test correlation',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Pile capacity can be evaluated by dynamic load tests, CPT correlations, or SPT correlations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'In reinforced concrete, which admixture reduces water penetration and increases durability?',
        'choices'     => json_encode([
            'Water‐reducing and waterproofing admixture',
            'Air‐entraining agent',
            'Accelerator',
            'Retarder',
        ]),
        'answer'      => 'Water‐reducing and waterproofing admixture',
        'explanation' => 'Such admixtures reduce permeability and enhance long‐term durability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which inspection is performed immediately after welding to check for surface defects?',
        'choices'     => json_encode([
            'Visual inspection',
            'Ultrasonic testing',
            'Magnetic particle testing',
            'Dye penetrant testing',
        ]),
        'answer'      => 'Visual inspection',
        'explanation' => 'Visual checks are first-line NDT to catch gross weld defects before further testing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 5,
        'question'    => 'Which foundation type uses a large concrete slab to distribute loads over poor soil?',
        'choices'     => json_encode([
            'Mat (raft) foundation',
            'Strip footing',
            'Pad footing',
            'Pile cap',
        ]),
        'answer'      => 'Mat (raft) foundation',
        'explanation' => 'Mat foundations spread load across a wide area to suit weak soils.',
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
