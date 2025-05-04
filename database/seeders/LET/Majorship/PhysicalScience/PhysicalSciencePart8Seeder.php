<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart8Seeder extends Seeder
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

       // 141
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is the First Law of Thermodynamics?",
           'choices'     => json_encode([
               'Energy cannot be created or destroyed, only transformed',
               'Entropy of the universe decreases',
               'Absolute zero cannot be reached',
               'Heat flows from hot to cold',
           ]),
           'answer'      => 'Energy cannot be created or destroyed, only transformed',
           'explanation' => 'The First Law is conservation of energy: ΔU = Q - W.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 142
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which quantity is state function in thermodynamics?",
           'choices'     => json_encode([
               'Internal energy (U)',
               'Heat (Q)',
               'Work (W)',
               'Path length',
           ]),
           'answer'      => 'Internal energy (U)',
           'explanation' => 'Internal energy depends only on state, not path.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 143
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What does the Second Law of Thermodynamics state?",
           'choices'     => json_encode([
               'Total entropy of an isolated system can never decrease',
               'Energy is conserved',
               'Pressure times volume is constant',
               'Heat capacity is negative',
           ]),
           'answer'      => 'Total entropy of an isolated system can never decrease',
           'explanation' => 'Entropy of universe increases or remains constant for reversible processes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 144
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which process occurs at constant entropy?",
           'choices'     => json_encode([
               'Isentropic',
               'Isothermal',
               'Isobaric',
               'Isochoric',
           ]),
           'answer'      => 'Isentropic',
           'explanation' => 'Isentropic processes have constant entropy (reversible adiabatic).',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 145
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is the Carnot efficiency of a heat engine operating between T_h and T_c?",
           'choices'     => json_encode([
               '1 - T_c/T_h',
               'T_c/T_h',
               'T_h/T_c',
               '1 - T_h/T_c',
           ]),
           'answer'      => '1 - T_c/T_h',
           'explanation' => 'Carnot efficiency = (T_h - T_c)/T_h for ideal reversible cycles.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 146
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which ensemble has fixed N, V, and T?",
           'choices'     => json_encode([
               'Canonical ensemble',
               'Microcanonical ensemble',
               'Grand canonical ensemble',
               'Isothermal–isobaric ensemble',
           ]),
           'answer'      => 'Canonical ensemble',
           'explanation' => 'Canonical ensemble is characterized by constant particle number, volume, and temperature.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 147
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is the Boltzmann constant (k_B)?",
           'choices'     => json_encode([
               '1.38×10⁻²³ J/K',
               '6.02×10²³ mol⁻¹',
               '8.31 J/mol·K',
               '9.11×10⁻³¹ kg',
           ]),
           'answer'      => '1.38×10⁻²³ J/K',
           'explanation' => 'Boltzmann constant relates temperature to energy at particle level.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 148
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Define entropy (S) in statistical terms: S = k_B ln(Ω). What is Ω?",
           'choices'     => json_encode([
               'Number of microstates',
               'Volume',
               'Temperature',
               'Pressure',
           ]),
           'answer'      => 'Number of microstates',
           'explanation' => 'Ω is the number of accessible microstates of the system.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 149
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is the partition function (Z) used for?",
           'choices'     => json_encode([
               'Calculating thermodynamic properties',
               'Measuring pressure',
               'Defining entropy only',
               'Determining speed',
           ]),
           'answer'      => 'Calculating thermodynamic properties',
           'explanation' => 'Partition function encodes statistical weights for computing U, F, S, etc.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 150
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is the Maxwell-Boltzmann distribution?",
           'choices'     => json_encode([
               'Statistical distribution of speeds of particles in an ideal gas',
               'Distribution of charge in conductor',
               'Intensity pattern in diffraction',
               'Pressure variation in fluid',
           ]),
           'answer'      => 'Statistical distribution of speeds of particles in an ideal gas',
           'explanation' => 'Maxwell-Boltzmann describes speed distribution at given temperature.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 151
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which heat capacity is measured at constant volume (C_V)?",
           'choices'     => json_encode([
               'Molar heat capacity at constant volume',
               'Molar heat capacity at constant pressure',
               'Specific heat of liquid water',
               'Heat of fusion',
           ]),
           'answer'      => 'Molar heat capacity at constant volume',
           'explanation' => 'C_V is defined as dU/dT at constant volume.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 152
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is the relation between C_P and C_V for ideal gases?",
           'choices'     => json_encode([
               'C_P - C_V = R',
               'C_P/C_V = γ',
               'C_P + C_V = R',
               'C_P = C_V',
           ]),
           'answer'      => 'C_P - C_V = R',
           'explanation' => 'For ideal gases, difference equals gas constant.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 153
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which law describes ideal gas behavior?",
           'choices'     => json_encode([
               'PV = nRT',
               'PV² = constant',
               'P/T = constant',
               'V/T² = constant',
           ]),
           'answer'      => 'PV = nRT',
           'explanation' => 'Ideal gas law relates pressure, volume, amount, and temperature.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 154
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which cyclic process has maximum efficiency?",
           'choices'     => json_encode([
               'Carnot cycle',
               'Otto cycle',
               'Rankine cycle',
               'Ericsson cycle',
           ]),
           'answer'      => 'Carnot cycle',
           'explanation' => 'Carnot cycle is reversible and defines maximum efficiency between two reservoirs.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 155
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is the thermodynamic work for reversible expansion?",
           'choices'     => json_encode([
               'W = -\int P dV',
               'W = PΔV',
               'W = Q - ΔU',
               'W = ΔU - Q',
           ]),
           'answer'      => 'W = -\int P dV',
           'explanation' => 'Reversible work is the negative integral of pressure over volume.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 156
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which statement is true for spontaneous heat flow?",
           'choices'     => json_encode([
               'Heat flows spontaneously from hot to cold',
               'Heat flows from cold to hot',
               'Heat flow direction depends on pressure',
               'Heat does not flow spontaneously',
           ]),
           'answer'      => 'Heat flows spontaneously from hot to cold',
           'explanation' => 'Second law dictates spontaneous heat transfer from high to low temperature.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 157
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "What is Gibbs free energy for spontaneous processes at constant T and P?",
           'choices'     => json_encode([
               'ΔG < 0',
               'ΔG > 0',
               'ΔG = 0',
               'ΔG undefined',
           ]),
           'answer'      => 'ΔG < 0',
           'explanation' => 'Negative ΔG indicates spontaneous process under constant temperature and pressure.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 158
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which heat engine works between three thermal reservoirs?",
           'choices'     => json_encode([
               'Absorption cycle',
               'Carnot cycle',
               'Otto cycle',
               'Diesel cycle',
           ]),
           'answer'      => 'Absorption cycle',
           'explanation' => 'Absorption cycles use an intermediate heat reservoir for refrigeration or work.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 159
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which distribution applies to indistinguishable bosons?",
           'choices'     => json_encode([
               'Bose-Einstein distribution',
               'Fermi-Dirac distribution',
               'Maxwell-Boltzmann distribution',
               'Gaussian distribution',
           ]),
           'answer'      => 'Bose-Einstein distribution',
           'explanation' => 'Bosons follow Bose-Einstein statistics allowing multiple occupancy.',
           'created_at'  => $now,
           'updated_at'  => $now
       ];
       
       // 160
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 8,
           'question'    => "Which distribution applies to indistinguishable fermions?",
           'choices'     => json_encode([
               'Fermi-Dirac distribution',
               'Bose-Einstein distribution',
               'Maxwell-Boltzmann distribution',
               'Poisson distribution',
           ]),
           'answer'      => 'Fermi-Dirac distribution',
           'explanation' => 'Fermions obey Pauli exclusion and follow Fermi-Dirac statistics.',
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
