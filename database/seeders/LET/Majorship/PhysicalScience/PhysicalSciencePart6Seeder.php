<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart6Seeder extends Seeder
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

       // 101
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What does Coulomb's law describe?",
           'choices'     => json_encode([
               'Electrostatic force between two point charges',
               'Magnetic force between two currents',
               'Gravitational force between masses',
               'Current in a circuit',
           ]),
           'answer'      => 'Electrostatic force between two point charges',
           'explanation' => 'Coulomb\'s law gives the magnitude and direction of force between charges separated by a distance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 102
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is the SI unit of electric charge?",
           'choices'     => json_encode([
               'Coulomb (C)',
               'Volt (V)',
               'Ampere (A)',
               'Ohm (Ω)',
           ]),
           'answer'      => 'Coulomb (C)',
           'explanation' => 'Charge is measured in coulombs, defined via current flowing for one second.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 103
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "How is the electric field (E) related to force (F) on a test charge (q)?",
           'choices'     => json_encode([
               'E = F/q',
               'E = q/F',
               'E = Fq',
               'E = F + q',
           ]),
           'answer'      => 'E = F/q',
           'explanation' => 'Electric field strength is the force per unit positive charge at a point.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 104
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is Gauss's law?",
           'choices'     => json_encode([
               'Electric flux through a closed surface equals enclosed charge divided by ε₀',
               'Magnetic flux through an open surface equals zero',
               'Induced emf equals negative rate of change of flux',
               'Current times resistance equals voltage',
           ]),
           'answer'      => 'Electric flux through a closed surface equals enclosed charge divided by ε₀',
           'explanation' => 'Gauss\'s law links electric field flux to charge within a Gaussian surface.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 105
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is the unit of electric potential difference?",
           'choices'     => json_encode([
               'Volt (V)',
               'Coulomb (C)',
               'Ohm (Ω)',
               'Watt (W)',
           ]),
           'answer'      => 'Volt (V)',
           'explanation' => 'One volt equals one joule per coulomb of charge.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 106
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "Which quantity measures capacitance?",
           'choices'     => json_encode([
               'Farad (F)',
               'Henry (H)',
               'Ohm (Ω)',
               'Tesla (T)',
           ]),
           'answer'      => 'Farad (F)',
           'explanation' => 'Capacitance is charge stored per unit voltage, measured in farads.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 107
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is the energy stored in a capacitor (C) at voltage V?",
           'choices'     => json_encode([
               '½ C V²',
               'C V',
               'C V²',
               '½ V²/C',
           ]),
           'answer'      => '½ C V²',
           'explanation' => 'Energy in a capacitor: (1/2) times capacitance times voltage squared.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 108
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is the SI unit of electrical resistance?",
           'choices'     => json_encode([
               'Ohm (Ω)',
               'Siemens (S)',
               'Volt (V)',
               'Ampere (A)',
           ]),
           'answer'      => 'Ohm (Ω)',
           'explanation' => 'Resistance is measured in ohms, defined as volts per ampere.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 109
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "Which law states V = IR?",
           'choices'     => json_encode([
               'Ohm\'s Law',
               'Kirchhoff\'s Law',
               'Coulomb\'s Law',
               'Faraday\'s Law',
           ]),
           'answer'      => 'Ohm\'s Law',
           'explanation' => 'Ohm\'s law relates voltage, current, and resistance in a conductor.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 110
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "How is resistivity (ρ) related to resistance (R)?",
           'choices'     => json_encode([
               'R = ρ l/A',
               'R = ρ A/l',
               'ρ = R l/A',
               'ρ = R A/l',
           ]),
           'answer'      => 'R = ρ l/A',
           'explanation' => 'Resistance equals resistivity times length over cross-sectional area.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 111
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "In series circuits, total resistance is: ",
           'choices'     => json_encode([
               'Sum of individual resistances',
               'Reciprocal of sum of reciprocals',
               'Zero',
               'Product of resistances',
           ]),
           'answer'      => 'Sum of individual resistances',
           'explanation' => 'Series resistances add directly: R_total = R1 + R2 + ...',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 112
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "In parallel circuits, total resistance is: ",
           'choices'     => json_encode([
               'Reciprocal of sum of reciprocals',
               'Sum of resistances',
               'Difference of resistances',
               'Product of resistances',
           ]),
           'answer'      => 'Reciprocal of sum of reciprocals',
           'explanation' => 'Parallel: 1/R_total = 1/R1 + 1/R2 + ...',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 113
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What does Kirchhoff's voltage law state?",
           'choices'     => json_encode([
               'Sum of potential differences around a loop is zero',
               'Sum of currents at a junction is zero',
               'Charge is conserved',
               'Energy is conserved',
           ]),
           'answer'      => 'Sum of potential differences around a loop is zero',
           'explanation' => 'KVL ensures energy conservation in electrical loops.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 114
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "Define electric current (I).",
           'choices'     => json_encode([
               'Charge per unit time',
               'Voltage per unit resistance',
               'Energy per charge',
               'Force per area',
           ]),
           'answer'      => 'Charge per unit time',
           'explanation' => 'Current is the rate at which charge flows past a point.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 115
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is the force on a charge q moving at velocity v in magnetic field B?",
           'choices'     => json_encode([
               'F = q v B sinθ',
               'F = q E',
               'F = q v/B',
               'F = q^2 v B',
           ]),
           'answer'      => 'F = q v B sinθ',
           'explanation' => 'Lorentz force on moving charge depends on angle between v and B.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 116
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is the SI unit of magnetic field strength?",
           'choices'     => json_encode([
               'Tesla (T)',
               'Weber (Wb)',
               'Ampere (A)',
               'Henry (H)',
           ]),
           'answer'      => 'Tesla (T)',
           'explanation' => 'Magnetic flux density is measured in teslas.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 117
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What force per unit length acts between two parallel currents I1 and I2 separated by r?",
           'choices'     => json_encode([
               'μ₀ I1 I2 / (2π r)',
               'I1 I2 / (μ₀ 2π r)',
               'μ₀ r / (2π I1 I2)',
               '2π r / (μ₀ I1 I2)',
           ]),
           'answer'      => 'μ₀ I1 I2 / (2π r)',
           'explanation' => 'Ampère’s force law between parallel currents uses μ₀ constant.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 118
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "Faraday's law of induction gives emf as: ",
           'choices'     => json_encode([
               '-dΦ/dt',
               'dΦ/dt',
               'Φ/dt',
               '0',
           ]),
           'answer'      => '-dΦ/dt',
           'explanation' => 'Induced emf is negative rate of change of magnetic flux.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 119
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What principle states induced current opposes change in flux?",
           'choices'     => json_encode([
               'Lenz\'s Law',
               'Ampère\'s Law',
               'Gauss\'s Law',
               'Kirchhoff\'s Law',
           ]),
           'answer'      => 'Lenz\'s Law',
           'explanation' => 'Lenz\'s law ensures conservation of energy by opposing flux change.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 120
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 6,
           'question'    => "What is the unit of inductance?",
           'choices'     => json_encode([
               'Henry (H)',
               'Farad (F)',
               'Ohm (Ω)',
               'Tesla (T)',
           ]),
           'answer'      => 'Henry (H)',
           'explanation' => 'Henry measures induced emf per rate of change of current.',
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
