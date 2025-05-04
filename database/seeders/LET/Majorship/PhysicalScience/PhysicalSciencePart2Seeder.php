<?php

namespace Database\Seeders\LET\Majorship\PhysicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalSciencePart2Seeder extends Seeder
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

       // 21
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "What does the atomic number of an element represent?",
           'choices'     => json_encode([
               'Number of protons in the nucleus',
               'Sum of protons and neutrons',
               'Number of electrons in neutral atom',
               'Average atomic mass',
           ]),
           'answer'      => 'Number of protons in the nucleus',
           'explanation' => 'Atomic number equals the number of protons and identifies the element.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 22
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "What is the mass number of an atom?",
           'choices'     => json_encode([
               'Sum of protons and neutrons',
               'Number of protons only',
               'Number of electrons only',
               'Atomic mass in amu',
           ]),
           'answer'      => 'Sum of protons and neutrons',
           'explanation' => 'Mass number is the total count of protons and neutrons in the nucleus.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 23
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Which pair of ions are isoelectronic?",
           'choices'     => json_encode([
               'O²⁻ and F⁻',
               'Na⁺ and Cl⁻',
               'Mg²⁺ and Ne',
               'All of the above',
           ]),
           'answer'      => 'All of the above',
           'explanation' => 'Each pair has the same electron configuration in these examples.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 24
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Which noble gas has the electron configuration [Ne]3s²3p⁶?",
           'choices'     => json_encode([
               'Argon',
               'Krypton',
               'Xenon',
               'Neon',
           ]),
           'answer'      => 'Argon',
           'explanation' => 'Argon has atomic number 18, configuration [Ne]3s²3p⁶.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 25
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Across a period in the periodic table, electronegativity generally:",
           'choices'     => json_encode([
               'Increases from left to right',
               'Decreases from left to right',
               'Stays the same',
               'Varies randomly',
           ]),
           'answer'      => 'Increases from left to right',
           'explanation' => 'Electronegativity increases due to stronger nuclear attraction across a period.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 26
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Which trend describes ionic radius down a group?",
           'choices'     => json_encode([
               'Increases down the group',
               'Decreases down the group',
               'No change',
               'First increases then decreases',
           ]),
           'answer'      => 'Increases down the group',
           'explanation' => 'Ionic radius increases due to addition of electron shells.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 27
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Calculate the molar mass of CaCO₃ (Ca=40.08, C=12.01, O=16.00).",
           'choices'     => json_encode([
               '100.09 g/mol',
               '40.08 g/mol',
               '84.07 g/mol',
               '87.09 g/mol',
           ]),
           'answer'      => '100.09 g/mol',
           'explanation' => 'Sum = 40.08 + 12.01 + (3×16.00) = 100.09 g/mol.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 28
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "How many moles are in 50.0 g of H₂O (M=18.02 g/mol)?",
           'choices'     => json_encode([
               '2.77 mol',
               '0.36 mol',
               '18.02 mol',
               '50.0 mol',
           ]),
           'answer'      => '2.77 mol',
           'explanation' => 'Moles = mass/M = 50.0/18.02 ≈ 2.77 mol.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 29
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "What mass of NaCl (M=58.44 g/mol) contains 0.500 mol?",
           'choices'     => json_encode([
               '29.22 g',
               '58.44 g',
               '116.88 g',
               '14.61 g',
           ]),
           'answer'      => '29.22 g',
           'explanation' => 'Mass = moles × M = 0.500 × 58.44 = 29.22 g.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 30
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "A compound has 40% C, 6.7% H, and 53.3% O by mass. What is its empirical formula?",
           'choices'     => json_encode([
               'CH₂O',
               'C₂H₄O₂',
               'CHO₂',
               'C₂H₂O',
           ]),
           'answer'      => 'CH₂O',
           'explanation' => 'Assume 100 g: 40 g C(3.33 mol), 6.7 g H(6.7 mol), 53.3 g O(3.33 mol) → ratio 1:2:1.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 31
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "If the molecular weight is 180 g/mol and empirical formula weight is 30 g/mol, what is the molecular formula?",
           'choices'     => json_encode([
               'C₆H₁₂O₆',
               'C₂H₄O₂',
               'C₃H₆O₃',
               'C₄H₈O₄',
           ]),
           'answer'      => 'C₆H₁₂O₆',
           'explanation' => 'n = 180/30 =6; multiply empirical CH₂O by 6 → C₆H₁₂O₆.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 32
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "In a reaction, 2.00 g H₂ react with 16.00 g O₂. Which is limiting reagent?",
           'choices'     => json_encode([
               'H₂',
               'O₂',
               'Neither',
               'Both',
           ]),
           'answer'      => 'H₂',
           'explanation' => 'Moles H₂=1.00, O₂=0.500; reaction needs 2:1 so H₂ limiting.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 33
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "If theoretical yield is 10.0 g and actual yield is 8.00 g, what is percent yield?",
           'choices'     => json_encode([
               '80%',
               '125%',
               '20%',
               '50%',
           ]),
           'answer'      => '80%',
           'explanation' => 'Percent yield = (actual/theoretical)×100 = (8.00/10.0)×100 = 80%.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 34
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "What is Avogadro's number?",
           'choices'     => json_encode([
               '6.022×10²³ particles/mol',
               '1.008 g/mol',
               '3.00×10⁸ m/s',
               '1.602×10⁻¹⁹ C',
           ]),
           'answer'      => '6.022×10²³ particles/mol',
           'explanation' => 'Avogadro’s number defines number of particles per mole.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 35
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "At STP, 1 mole of ideal gas occupies: ",
           'choices'     => json_encode([
               '22.4 L',
               '24.5 L',
               '18.0 L',
               '20.0 L',
           ]),
           'answer'      => '22.4 L',
           'explanation' => 'Molar volume at STP (0°C,1 atm) is 22.4 L.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 36
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Use ideal gas law: Calculate pressure of 2.00 mol gas at 300 K in 10.0 L vessel (R=0.0821).",
           'choices'     => json_encode([
               '4.92 atm',
               '0.49 atm',
               '24.6 atm',
               '1.00 atm',
           ]),
           'answer'      => '4.92 atm',
           'explanation' => 'P= nRT/V = (2×0.0821×300)/10.0 ≈ 4.92 atm.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 37
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "What is standard temperature and pressure (STP)?",
           'choices'     => json_encode([
               '0°C and 1 atm',
               '25°C and 1 atm',
               '0 K and 1 bar',
               '100°C and 1 atm',
           ]),
           'answer'      => '0°C and 1 atm',
           'explanation' => 'Standard conditions defined as 273 K (0°C) and 1 atmosphere pressure.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 38
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Convert 2.00 mol gas at STP to volume.",
           'choices'     => json_encode([
               '44.8 L',
               '22.4 L',
               '11.2 L',
               '2.00 L',
           ]),
           'answer'      => '44.8 L',
           'explanation' => '2×22.4 L = 44.8 L at STP.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 39
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "Dalton's law: Total pressure of gas mixture is sum of _____.",
           'choices'     => json_encode([
               'Partial pressures',
               'Temperatures',
               'Volumes',
               'Moles only',
           ]),
           'answer'      => 'Partial pressures',
           'explanation' => 'Dalton’s law states P_total = ΣP_i of component gases.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 40
       $batch[] = [
           'subject_id'  => 13,
           'part'        => 2,
           'question'    => "What is the molarity of a solution with 5.00 mol solute in 2.50 L?",
           'choices'     => json_encode([
               '2.00 M',
               '0.50 M',
               '12.50 M',
               '7.50 M',
           ]),
           'answer'      => '2.00 M',
           'explanation' => 'Molarity = moles/volume (L) = 5.00/2.50 = 2.00 M.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
