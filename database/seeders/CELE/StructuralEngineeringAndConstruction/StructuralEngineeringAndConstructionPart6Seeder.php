<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Under NSCP seismic provisions, the design base shear V is calculated as V = C_s·W. What does W represent?',
        'choices'     => json_encode([
            'Seismic weight of the structure',
            'Wind load on the structure',
            'Dead load only',
            'Live load only',
        ]),
        'answer'      => 'Seismic weight of the structure',
        'explanation' => 'W is the effective seismic weight (dead load + appropriate live load factors) used in base shear calculation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which diaphragm action is assumed in NSCP for unreinforced masonry walls during seismic loading?',
        'choices'     => json_encode([
            'Rigid diaphragm',
            'Flexible diaphragm',
            'Semi-rigid diaphragm',
            'No diaphragm action',
        ]),
        'answer'      => 'Rigid diaphragm',
        'explanation' => 'NSCP assumes floors act as rigid diaphragms to distribute seismic forces to walls or frames.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'In reinforced concrete shear wall design, minimum horizontal reinforcement ratio is typically:',
        'choices'     => json_encode([
            '0.25%',
            '0.15%',
            '0.50%',
            '1.0%',
        ]),
        'answer'      => '0.25%',
        'explanation' => 'NSCP requires at least 0.25% horizontal steel ratio to control cracking and ensure integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which formwork component resists lateral pressure of fresh concrete?',
        'choices'     => json_encode([
            'Sheathing panels',
            'Props (shores)',
            'Walings',
            'Bracing',
        ]),
        'answer'      => 'Bracing',
        'explanation' => 'Bracing holds the formwork against lateral concrete pressure, keeping panels plumb and in place.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which test determines the slump flow of self-consolidating concrete?',
        'choices'     => json_encode([
            'Slump-flow test',
            'Standard slump test',
            'Compaction factor test',
            'V-funnel test',
        ]),
        'answer'      => 'Slump-flow test',
        'explanation' => 'Slump-flow measures spread of SCC under its own weight, indicating viscosity and filling ability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which safety factor does NSCP recommend for live loads on permanent structures?',
        'choices'     => json_encode([
            '1.6',
            '1.2',
            '1.0',
            '1.4',
        ]),
        'answer'      => '1.6',
        'explanation' => 'NSCP applies 1.6 factor to live loads in ultimate load combinations for safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'In steel girder erection, which device ensures correct camber is achieved?',
        'choices'     => json_encode([
            'Hydraulic jacks',
            'Plumb bob',
            'Torque wrench',
            'Spirit level',
        ]),
        'answer'      => 'Hydraulic jacks',
        'explanation' => 'Jacks apply upward force at midspan to impart specified camber before release.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which construction survey control establishes permanent reference marks on site?',
        'choices'     => json_encode([
            'Benchmarks',
            'Control vertices',
            'Traverse points',
            'Temporary stakes',
        ]),
        'answer'      => 'Benchmarks',
        'explanation' => 'Benchmarks are fixed elevation points used as vertical controls throughout construction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which project delivery method gives the owner a single point of responsibility?',
        'choices'     => json_encode([
            'Design-build',
            'Design-bid-build',
            'Construction management-at-risk',
            'Integrated project delivery',
        ]),
        'answer'      => 'Design-build',
        'explanation' => 'Design-build contracts combine design and construction under one entity for accountability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which test measures concrete temperature rise in mass pours?',
        'choices'     => json_encode([
            'Thermocouple monitoring',
            'Slump test',
            'Rebound hammer',
            'Ultrasonic test',
        ]),
        'answer'      => 'Thermocouple monitoring',
        'explanation' => 'Thermocouples embedded in concrete record internal temperature to control thermal cracking.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which construction cost estimating technique uses historical unit costs?',
        'choices'     => json_encode([
            'Unit rate method',
            'Detailed quantity takeoff',
            'Engineer’s estimate',
            'Parametric estimating',
        ]),
        'answer'      => 'Unit rate method',
        'explanation' => 'Unit-rate applies past unit costs (per m³, per m²) to quantities for rapid estimates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which method improves ground for slurry walls excavation?',
        'choices'     => json_encode([
            'Bentonite slurry support',
            'Jet grouting',
            'Vibrocompaction',
            'Preloading',
        ]),
        'answer'      => 'Bentonite slurry support',
        'explanation' => 'Slurry maintains excavation face stability by balancing earth pressures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which component in a welded joint reduces stress concentration?',
        'choices'     => json_encode([
            'Run-on tabs',
            'Sharp root profile',
            'Intermittent welds',
            'No backing strip',
        ]),
        'answer'      => 'Run-on tabs',
        'explanation' => 'Tabs allow weld to start outside high-stress zone, reducing notch effect at joint root.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which admixture accelerates early strength gain in cold weather?',
        'choices'     => json_encode([
            'Calcium chloride',
            'Air-entrainer',
            'Retarder',
            'Water reducer',
        ]),
        'answer'      => 'Calcium chloride',
        'explanation' => 'CaCl₂ speeds hydration, increasing early strength but may affect corrosion and color.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which scheduling chart displays activity durations over calendar time?',
        'choices'     => json_encode([
            'Gantt chart',
            'Flowline chart',
            'PERT diagram',
            'Critical path method network',
        ]),
        'answer'      => 'Gantt chart',
        'explanation' => 'Gantt charts show bars on time axis representing each activity duration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which test identifies voids under concrete slabs in situ?',
        'choices'     => json_encode([
            'Ground-penetrating radar (GPR)',
            'Rebound hammer',
            'Slump test',
            'Core test',
        ]),
        'answer'      => 'Ground-penetrating radar (GPR)',
        'explanation' => 'GPR uses electromagnetic waves to locate subsurface voids and delaminations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which structural material exhibits the highest modulus of elasticity?',
        'choices'     => json_encode([
            'Steel',
            'Concrete',
            'Timber',
            'Masonry',
        ]),
        'answer'      => 'Steel',
        'explanation' => 'Steel E ≈ 200 GPa, much higher than concrete (~25 GPa) or timber (~10 GPa).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which factor governs formwork removal time for beams?',
        'choices'     => json_encode([
            'Concrete compressive strength',
            'Ambient humidity',
            'Aggregate size',
            'Color of formwork',
        ]),
        'answer'      => 'Concrete compressive strength',
        'explanation' => 'Removal is based on achieving specified in-place strength (e.g., 70% f\'c).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which safety device prevents overloading of formwork shores?',
        'choices'     => json_encode([
            'Load indicator gauges',
            'Torque wrenches',
            'Spirit levels',
            'Plumb bobs',
        ]),
        'answer'      => 'Load indicator gauges',
        'explanation' => 'Gauges measure applied load on shores to avoid exceeding design capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 6,
        'question'    => 'Which retention wall type anchors into stable strata with tensioned cables?',
        'choices'     => json_encode([
            'Anchored retaining wall',
            'Gravity wall',
            'Cantilever wall',
            'Counterfort wall',
        ]),
        'answer'      => 'Anchored retaining wall',
        'explanation' => 'Anchored walls use prestressed anchors to resist earth pressures, permitting slender sections.',
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
