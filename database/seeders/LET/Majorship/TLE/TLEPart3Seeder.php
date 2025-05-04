<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart3Seeder extends Seeder
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

       // Part 3 – Basic Electricity – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'According to Ohm\'s Law, what is the current through a 10 Ω resistor when a voltage of 20 V is applied?',
           'choices'      => json_encode([
               '2 A',
               '0.5 A',
               '10 A',
               '200 A',
           ]),
           'answer'       => '2 A',
           'explanation'  => 'I = V / R = 20 V / 10 Ω = 2 A.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'What is the total resistance of three resistors (5 Ω, 10 Ω, 15 Ω) connected in series?',
           'choices'      => json_encode([
               '30 Ω',
               '7.5 Ω',
               '0.13 Ω',
               '150 Ω',
           ]),
           'answer'       => '30 Ω',
           'explanation'  => 'Series resistance adds: 5 + 10 + 15 = 30 Ω.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Calculate the equivalent resistance of two 20 Ω resistors connected in parallel.',
           'choices'      => json_encode([
               '10 Ω',
               '40 Ω',
               '20 Ω',
               '0 Ω',
           ]),
           'answer'       => '10 Ω',
           'explanation'  => 'Parallel: 1/R = 1/20 + 1/20 = 2/20 ⇒ R = 10 Ω.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'What is the electrical power consumed by a device rated 120 V and 2 A?',
           'choices'      => json_encode([
               '240 W',
               '60 W',
               '120 W',
               '2 W',
           ]),
           'answer'       => '240 W',
           'explanation'  => 'Power P = V × I = 120 V × 2 A = 240 W.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which unit is used to measure electrical capacitance?',
           'choices'      => json_encode([
               'Farad',
               'Ohm',
               'Henry',
               'Volt',
           ]),
           'answer'       => 'Farad',
           'explanation'  => 'Capacitance is measured in farads (F).',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'In the Philippine wiring color code, which color typically represents the earth (ground) conductor?',
           'choices'      => json_encode([
               'Green with yellow stripe',
               'Black',
               'Red',
               'Blue',
           ]),
           'answer'       => 'Green with yellow stripe',
           'explanation'  => 'Green/yellow is the standard earth/ground color.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which instrument is used to measure AC and DC voltage in electrical circuits?',
           'choices'      => json_encode([
               'Multimeter',
               'Oscilloscope',
               'Ammeter',
               'Wattmeter',
           ]),
           'answer'       => 'Multimeter',
           'explanation'  => 'A multimeter measures voltage, current, and resistance.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'What symbol represents a battery in a circuit diagram?',
           'choices'      => json_encode([
               'Pair of unequal parallel lines',
               'Circle with V inside',
               'Zigzag line',
               'Coiled line',
           ]),
           'answer'       => 'Pair of unequal parallel lines',
           'explanation'  => 'Battery is shown by long and short lines representing positive and negative terminals.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which law states that total voltage around a closed loop equals zero?',
           'choices'      => json_encode([
               'Kirchhoff’s Voltage Law',
               'Kirchhoff’s Current Law',
               'Ohm’s Law',
               'Faraday’s Law',
           ]),
           'answer'       => 'Kirchhoff’s Voltage Law',
           'explanation'  => 'KVL: sum of voltages in a loop is zero.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which law states that the algebraic sum of currents entering a junction equals the sum leaving it?',
           'choices'      => json_encode([
               'Kirchhoff’s Voltage Law',
               'Kirchhoff’s Current Law',
               'Coulomb’s Law',
               'Lenz’s Law',
           ]),
           'answer'       => 'Kirchhoff’s Current Law',
           'explanation'  => 'KCL: sum of currents at a node is zero.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'What is the main purpose of a transformer in AC circuits?',
           'choices'      => json_encode([
               'Change voltage levels',
               'Rectify current',
               'Store energy',
               'Measure frequency',
           ]),
           'answer'       => 'Change voltage levels',
           'explanation'  => 'Transformers step up or step down AC voltages.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which component protects circuits by melting when excessive current flows?',
           'choices'      => json_encode([
               'Fuse',
               'Circuit breaker',
               'Resistor',
               'Diode',
           ]),
           'answer'       => 'Fuse',
           'explanation'  => 'Fuses melt and interrupt current under overload.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which device automatically resets after tripping on overload?',
           'choices'      => json_encode([
               'Circuit breaker',
               'Fuse',
               'Relay',
               'Capacitor',
           ]),
           'answer'       => 'Circuit breaker',
           'explanation'  => 'Circuit breakers can be reset without replacement.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'What symbol represents a resistor in circuit diagrams?',
           'choices'      => json_encode([
               'Zigzag line',
               'Coiled line',
               'Circle',
               'Triangle',
           ]),
           'answer'       => 'Zigzag line',
           'explanation'  => 'Resistors are shown as zigzag lines in most standards.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which symbol denotes a capacitor in a schematic?',
           'choices'      => json_encode([
               'Parallel lines',
               'Coiled line',
               'Rectangle',
               'Diamond',
           ]),
           'answer'       => 'Parallel lines',
           'explanation'  => 'Capacitors are depicted as two parallel lines.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'What is the typical household AC frequency in the Philippines?',
           'choices'      => json_encode([
               '60 Hz',
               '50 Hz',
               '400 Hz',
               '25 Hz',
           ]),
           'answer'       => '60 Hz',
           'explanation'  => 'The Philippine standard is 60 Hz AC supply.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which property of conductors decreases as temperature increases?',
           'choices'      => json_encode([
               'Resistance',
               'Conductivity',
               'Capacitance',
               'Inductance',
           ]),
           'answer'       => 'Conductivity',
           'explanation'  => 'As temperature rises, conductivity drops because resistance increases.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'What is the function of a diode in a circuit?',
           'choices'      => json_encode([
               'Allow current in one direction only',
               'Store electrical energy',
               'Amplify signals',
               'Measure voltage',
           ]),
           'answer'       => 'Allow current in one direction only',
           'explanation'  => 'Diodes conduct current forward and block reverse flow.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which test checks the integrity of insulation around wires?',
           'choices'      => json_encode([
               'Insulation resistance test',
               'Continuity test',
               'Voltage test',
               'Current test',
           ]),
           'answer'       => 'Insulation resistance test',
           'explanation'  => 'This test measures resistance of insulating materials to ensure safety.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Basic Electricity – Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 3,
           'question'     => 'Which protective device interrupts excess voltage to safeguard equipment?',
           'choices'      => json_encode([
               'Surge protector',
               'Fuse',
               'Transformer',
               'Resistor',
           ]),
           'answer'       => 'Surge protector',
           'explanation'  => 'Surge protectors clamp or divert voltage spikes to protect circuits.',
           'created_at'   => $now,
           'updated_at'   => $now,
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
