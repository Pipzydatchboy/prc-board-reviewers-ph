<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart8Seeder extends Seeder
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
       $batch = [];

        // Part 8: Health, Safety, and Maintenance in Technical & Vocational Education

        //1
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which personal protective equipment (PPE) is essential when grinding metal?',
            'choices'     => json_encode([
                'Safety goggles and face shield',
                'Ear plugs only',
                'Cotton gloves',
                'Steel-toed boots only',
            ]),
            'answer'      => 'Safety goggles and face shield',
            'explanation' => 'Grinding can produce sparks and debris that require eye and face protection.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //2
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'What is the purpose of a lockout/tagout procedure?',
            'choices'     => json_encode([
                'To ensure machinery is de-energized during maintenance',
                'To speed up machine startup',
                'To label tools in a workshop',
                'To organize work schedules',
            ]),
            'answer'      => 'To ensure machinery is de-energized during maintenance',
            'explanation' => 'Lockout/tagout prevents accidental energization of equipment by isolating power sources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //3
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which fire extinguisher type is suitable for electrical fires?',
            'choices'     => json_encode([
                'CO2 extinguisher',
                'Water extinguisher',
                'Foam extinguisher',
                'Wet chemical extinguisher',
            ]),
            'answer'      => 'CO2 extinguisher',
            'explanation' => 'CO2 extinguishers remove oxygen and are non-conductive, making them safe for electrical fires.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //4
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'How often should power tools be inspected for damage?',
            'choices'     => json_encode([
                'Before each use',
                'Once a year',
                'When they stop working',
                'After 100 hours of use',
            ]),
            'answer'      => 'Before each use',
            'explanation' => 'Daily inspections help identify wear or damage before accidents occur.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //5
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which schedule is best for routine lubrication of mechanical parts?',
            'choices'     => json_encode([
                'Preventive maintenance schedule',
                'Corrective maintenance schedule',
                'Reactive maintenance schedule',
                'Predictive maintenance schedule',
            ]),
            'answer'      => 'Preventive maintenance schedule',
            'explanation' => 'Preventive maintenance involves regular servicing to prevent equipment failure.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //6
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'What is the main hazard of using compressed air for cleaning?',
            'choices'     => json_encode([
                'Eye and skin injuries from high-pressure air',
                'Fire risk',
                'Chemical exposure',
                'Electric shock',
            ]),
            'answer'      => 'Eye and skin injuries from high-pressure air',
            'explanation' => 'Compressed air can embed particles into skin and eyes; proper PPE is required.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //7
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which signage indicates a mandatory action in the workshop?',
            'choices'     => json_encode([
                'Blue circle sign',
                'Red circle sign',
                'Yellow triangle sign',
                'Green square sign',
            ]),
            'answer'      => 'Blue circle sign',
            'explanation' => 'Blue circular signs instruct mandatory actions like wearing PPE.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //8
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'What is the first step in conducting a risk assessment?',
            'choices'     => json_encode([
                'Identify hazards',
                'Implement controls',
                'Review procedures',
                'Train staff',
            ]),
            'answer'      => 'Identify hazards',
            'explanation' => 'Risk assessment begins by recognizing potential sources of harm.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //9
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which document records all maintenance activities?',
            'choices'     => json_encode([
                'Maintenance logbook',
                'Risk register',
                'Training manual',
                'Safety data sheet',
            ]),
            'answer'      => 'Maintenance logbook',
            'explanation' => 'A logbook tracks dates, findings, and actions for equipment maintenance.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //10
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which gas detector is crucial in confined space work?',
            'choices'     => json_encode([
                'Multi-gas detector',
                'Carbon monoxide alarm',
                'Smoke alarm',
                'Thermometer',
            ]),
            'answer'      => 'Multi-gas detector',
            'explanation' => 'Multi-gas detectors measure oxygen, flammable gases, and toxic gas levels.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //11
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'What training is required before operating heavy machinery?',
            'choices'     => json_encode([
                'Competency-based training',
                'Online tutorial only',
                'Orientation video',
                'Reading the manual alone',
            ]),
            'answer'      => 'Competency-based training',
            'explanation' => 'Hands-on training with assessment ensures operator competence and safety.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //12
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which practice prevents tool slippage and injury?',
            'choices'     => json_encode([
                'Regular sharpening and proper grip',
                'Using tools with worn handles',
                'Overloading tools',
                'Holding tools with bare hands only',
            ]),
            'answer'      => 'Regular sharpening and proper grip',
            'explanation' => 'Sharp tools require less force and proper grip reduces slip-related injuries.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //13
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which chemical safety document describes hazards and handling procedures?',
            'choices'     => json_encode([
                'Safety Data Sheet (SDS)',
                'Inventory list',
                'Maintenance record',
                'User manual',
            ]),
            'answer'      => 'Safety Data Sheet (SDS)',
            'explanation' => 'SDS provides details on chemical properties, hazards, and safety precautions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //14
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'How should electrical cords be stored to ensure safety?',
            'choices'     => json_encode([
                'Coiled and hung off the ground',
                'Left on the floor',
                'Wrapped around equipment',
                'Tied tightly with knots',
            ]),
            'answer'      => 'Coiled and hung off the ground',
            'explanation' => 'Proper storage prevents trips, damage, and electrical hazards.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //15
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which maintenance type addresses failures as they occur?',
            'choices'     => json_encode([
                'Reactive maintenance',
                'Preventive maintenance',
                'Predictive maintenance',
                'Scheduled overhaul',
            ]),
            'answer'      => 'Reactive maintenance',
            'explanation' => 'Reactive maintenance fixes equipment after breakdowns occur.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //16
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'What is the correct action if a tool guard is missing?',
            'choices'     => json_encode([
                'Do not use the tool and report immediately',
                'Proceed with caution',
                'Use duct tape to cover exposed parts',
                'Replace with any other guard',
            ]),
            'answer'      => 'Do not use the tool and report immediately',
            'explanation' => 'Operating without guards poses severe injury risks; report for repair.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //17
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which inspection tool measures surface flatness?',
            'choices'     => json_encode([
                'Straightedge and feeler gauges',
                'Tape measure',
                'Caliper only',
                'Level only',
            ]),
            'answer'      => 'Straightedge and feeler gauges',
            'explanation' => 'Combined use checks for gaps and surface deviations accurately.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //18
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which practice reduces manual handling injuries?',
            'choices'     => json_encode([
                'Use mechanical lifting aids',
                'Lift with back bent',
                'Avoid breaks',
                'Wear slip-on shoes',
            ]),
            'answer'      => 'Use mechanical lifting aids',
            'explanation' => 'Aids like hoists and trolleys minimize strain and injury.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //19
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which maintenance record helps predict future failures?',
            'choices'     => json_encode([
                'Predictive maintenance logs',
                'Daily attendance sheets',
                'Financial reports',
                'Training schedules',
            ]),
            'answer'      => 'Predictive maintenance logs',
            'explanation' => 'They track condition-monitoring data to forecast issues.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //20
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 8,
            'question'    => 'Which emergency procedure is practiced during chemical spills?',
            'choices'     => json_encode([
                'Evacuation and containment protocol',
                'Continue working',
                'Wash with water only',
                'Call maintenance only',
            ]),
            'answer'      => 'Evacuation and containment protocol',
            'explanation' => 'Proper response isolates hazard and protects personnel.',
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
