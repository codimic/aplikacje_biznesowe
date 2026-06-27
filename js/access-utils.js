function decodePassword(input) {
  const base64 = input.replace(/[^A-Za-z0-9+/=]/g, '');
  return Buffer.from(base64, 'base64').toString('utf8');
}

function isAccessDataValid(data) {
  const password = (data && data.pws ? String(data.pws).trim() : '');
  const code = (data && data.srt ? String(data.srt).trim() : '');
  const name = (data && data.fName ? String(data.fName).trim() : '');

  return password === 'Th15_15_5TR0n6' && code === '1352' && name !== '';
}

module.exports = {
  decodePassword,
  isAccessDataValid,
};
