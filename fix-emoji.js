const fs = require('fs');
const path = require('path');

const filePath = 'c:\\wamp64\\www\\Portfolio\\pages\\veille-cas.php';

// Read file as UTF-8
const content = fs.readFileSync(filePath, 'utf8');

// Split into lines
const lines = content.split('\n');

// Find and replace the specific line
let found = false;
const updatedLines = lines.map((line, index) => {
  // Line 47 (index 46) contains the broken emoji
  if (index === 46) {
    console.log(`Found line 47: ${JSON.stringify(line)}`);
    // Replace the entire div with the new one containing ⚡
    const newLine = '        <div style="font-size: 32px;">⚡</div>';
    console.log(`Replacing with: ${JSON.stringify(newLine)}`);
    found = true;
    return newLine;
  }
  return line;
});

if (found) {
  // Write back to file with UTF-8 encoding
  const updatedContent = updatedLines.join('\n');
  fs.writeFileSync(filePath, updatedContent, 'utf8');
  console.log('✓ File updated successfully!');
} else {
  console.log('✗ Could not find the target line');
  process.exit(1);
}
