<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart5Seeder extends Seeder
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

       // 81
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What is Newton's First Law of Motion?",
           'choices'     => json_encode([
               'An object remains at rest or in uniform motion unless acted on by a net external force',
               'Force equals mass times acceleration',
               'For every action there is an equal and opposite reaction',
               'Energy is conserved',
           ]),
           'answer'      => 'An object remains at rest or in uniform motion unless acted on by a net external force',
           'explanation' => 'This law describes inertia and absence of net force leading to constant velocity.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 82
       $batch[] = [
        'subject_id'  => 13,
        'part'        => 5,
        'question'    => "Which equation represents Newton's Second Law?",
        'choices'     => json_encode([
            'F = ma',
            'F = mv²/r',
            'p = mv',
            'W = Fd',
        ]),
        'answer'      => 'F = ma',
        'explanation' => 'Newton\'s Second Law relates force, mass, and acceleration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 83
       $batch[] = [
        'subject_id'  => 13,
        'part'        => 5,
        'question'    => "What is the SI unit of acceleration?",
        'choices'     => json_encode([
            'm/s²',
            'm/s',
            'kg·m/s²',
            'Joule (J)',
        ]),
        'answer'      => 'm/s²',
        'explanation' => 'Acceleration is measured in meters per second squared.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 84
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Define momentum (p).",
           'choices'     => json_encode([
               'Mass times velocity',
               'Force times distance',
               'Mass times acceleration',
               'Change in velocity',
           ]),
           'answer'      => 'Mass times velocity',
           'explanation' => 'Momentum is the product of mass and velocity, a vector quantity.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 85
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What does conservation of momentum state for an isolated system?",
           'choices'     => json_encode([
               'Total momentum remains constant',
               'Total energy remains constant',
               'Total force is zero',
               'Total mass is conserved',
           ]),
           'answer'      => 'Total momentum remains constant',
           'explanation' => 'In absence of external forces, momentum of system is conserved.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 86
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Which quantity is a scalar?",
           'choices'     => json_encode([
               'Speed',
               'Velocity',
               'Force',
               'Momentum',
           ]),
           'answer'      => 'Speed',
           'explanation' => 'Speed has magnitude only; velocity has direction.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 87
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What is the work done by a force of 10 N moving an object 5 m in direction of force?",
           'choices'     => json_encode([
               '50 J',
               '2 J',
               '5 J',
               '500 J',
           ]),
           'answer'      => '50 J',
           'explanation' => 'Work = force × displacement = 10 N × 5 m = 50 J.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 88
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Define kinetic energy (KE).",
           'choices'     => json_encode([
               '1/2 m v²',
               'mgh',
               'F d',
               'mv',
           ]),
           'answer'      => '1/2 m v²',
           'explanation' => 'Kinetic energy is half mass times velocity squared.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 89
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What is the unit of energy in SI?",
           'choices'     => json_encode([
               'Joule (J)',
               'Watt (W)',
               'Newton (N)',
               'Pascal (Pa)',
           ]),
           'answer'      => 'Joule (J)',
           'explanation' => 'The joule is the SI derived unit of work or energy.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 90
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Work done by friction is typically: ",
           'choices'     => json_encode([
               'Negative',
               'Positive',
               'Zero',
               'Undefined',
           ]),
           'answer'      => 'Negative',
           'explanation' => 'Friction opposes motion, doing negative work on object.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 91
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Define power in mechanics.",
           'choices'     => json_encode([
               'Work per unit time',
               'Force per unit area',
               'Energy per unit mass',
               'Momentum per unit time',
           ]),
           'answer'      => 'Work per unit time',
           'explanation' => 'Power is the rate at which work is done or energy is transferred.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 92
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Which law relates pressure and volume of a gas at constant temperature?",
           'choices'     => json_encode([
               'Boyle\'s Law',
               'Charles\'s Law',
               'Avogadro\'s Law',
               'Gay-Lussac\'s Law',
           ]),
           'answer'      => 'Boyle\'s Law',
           'explanation' => 'Boyle\'s law states P₁V₁ = P₂V₂ at constant temperature.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 93
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What is centripetal force?",
           'choices'     => json_encode([
               'Force toward center causing circular motion',
               'Force away from center in circular motion',
               'Frictional force',
               'Inertial force',
           ]),
           'answer'      => 'Force toward center causing circular motion',
           'explanation' => 'Centripetal force acts perpendicular to velocity, towards center.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 94
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Which quantity is conserved in an elastic collision?",
           'choices'     => json_encode([
               'Both momentum and kinetic energy',
               'Only momentum',
               'Only kinetic energy',
               'Neither',
           ]),
           'answer'      => 'Both momentum and kinetic energy',
           'explanation' => 'Elastic collisions conserve both total momentum and kinetic energy.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 95
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Define torque (τ).",
           'choices'     => json_encode([
               'Force times lever arm',
               'Mass times acceleration',
               'Energy per rotation',
               'Work per unit distance',
           ]),
           'answer'      => 'Force times lever arm',
           'explanation' => 'Torque equals force times perpendicular distance from pivot.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 96
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What condition defines static equilibrium?",
           'choices'     => json_encode([
               'Net force and net torque both zero',
               'Net force zero only',
               'Net torque zero only',
               'Moving at constant velocity',
           ]),
           'answer'      => 'Net force and net torque both zero',
           'explanation' => 'Static equilibrium requires no translation or rotation.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 97
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What is moment of inertia dependent on?",
           'choices'     => json_encode([
               'Mass distribution relative to axis',
               'Temperature',
               'Velocity',
               'Acceleration',
           ]),
           'answer'      => 'Mass distribution relative to axis',
           'explanation' => 'Moment of inertia depends on how mass is distributed from rotation axis.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 98
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Which equation relates angular acceleration (α) to torque (τ) and moment of inertia (I)?",
           'choices'     => json_encode([
               'τ = Iα',
               'τ = m a',
               'α = v²/r',
               'τ = Fd',
           ]),
           'answer'      => 'τ = Iα',
           'explanation' => 'Rotational analogue of F = ma: torque equals moment of inertia times angular acceleration.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 99
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "What is the unit of torque in SI?",
           'choices'     => json_encode([
               'Newton-meter (N·m)',
               'Joule (J)',
               'Watt (W)',
               'Pascal (Pa)',
           ]),
           'answer'      => 'Newton-meter (N·m)',
           'explanation' => 'Torque unit is force times distance, N·m.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 100
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 5,
           'question'    => "Define centripetal acceleration (a_c).",
           'choices'     => json_encode([
               'v²/r',
               'r/v²',
               'v/r',
               'ra v',
           ]),
           'answer'      => 'v²/r',
           'explanation' => 'Centripetal acceleration equals velocity squared divided by radius.',
           'created_at'  => $now,
           'updated_at'  => $now
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
