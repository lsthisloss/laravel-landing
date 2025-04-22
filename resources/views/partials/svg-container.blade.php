<div class="svg-container">
    @php
        $icons = [
            ['src' => '/images/hearts.svg', 'alt' => 'Heart'],
            ['src' => '/images/picks.svg', 'alt' => 'Pick'],
            ['src' => '/images/vector.svg', 'alt' => 'Vector'],
        ];

        $totalIcons = $totalIcons ?? 5; // Используем переданное значение или значение по умолчанию
        $positions = []; // Хранение позиций для проверки пересечений
        $containerWidth = 800; // Ширина контейнера (в пикселях)
        $containerHeight = 600; // Высота контейнера (в пикселях)
        $gap = 10; // Отступ между иконками (в пикселях)

        // Проверка на пересечение
        $isOverlapping = function ($newX, $newY, $newSize, $positions) use ($gap) {
            foreach ($positions as $position) {
                $existingX = $position['x'];
                $existingY = $position['y'];
                $existingSize = $position['size'];

                if (
                    abs($newX - $existingX) < ($newSize + $existingSize) / 2 + $gap &&
                    abs($newY - $existingY) < ($newSize + $existingSize) / 2 + $gap
                ) {
                    return true; // Пересечение найдено
                }
            }
            return false; // Пересечений нет
        };
    @endphp

    @for ($i = 0; $i < $totalIcons; $i++)
        @php
            $attempts = 0;
            $maxAttempts = 100; // Максимальное количество попыток для размещения
            $placed = false;

            do {
                $randomIcon = $icons[array_rand($icons)];
                $randomSize = rand(50, 140); // Случайный размер
                $randomX = rand(0, $containerWidth - $randomSize); // Случайная позиция по X
                $randomY = rand(0, $containerHeight - $randomSize); // Случайная позиция по Y

                // Проверяем, чтобы иконка не пересекалась
                if (!$isOverlapping($randomX, $randomY, $randomSize, $positions)) {
                    $positions[] = [
                        'x' => $randomX,
                        'y' => $randomY,
                        'size' => $randomSize,
                    ];
                    $placed = true;
                }

                $attempts++;
            } while (!$placed && $attempts < $maxAttempts);

            // Если не удалось разместить иконку, пропускаем её
            if (!$placed) {
                continue;
            }
        @endphp
        <div
            class="svg-icon-wrapper"
            style="
                left: {{ $randomX }}px;
                top: {{ $randomY }}px;
                width: {{ $randomSize }}px;
                height: {{ $randomSize }}px;
            "
        >
            <img
                src="{{ asset($randomIcon['src']) }}"
                alt="{{ $randomIcon['alt'] }}"
                class="svg-icon svg-icon-base"
            >
            <img
                src="{{ asset($randomIcon['src']) }}"
                alt=""
                class="svg-icon svg-icon-overlay"
            > {{-- Маска --}}
        </div>
    @endfor
</div>
