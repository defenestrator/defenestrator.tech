`for file in ./*; do cwebp -q 50 "$file" -o "${file%.*}.webp"; done`
