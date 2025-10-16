let Quill;

// Try ESM/named imports first
try {
	// eslint-disable-next-line import/no-extraneous-dependencies
	// This may be an ES module with named/default exports
	// Use dynamic import to avoid bundler strange resolution in some setups
	// but fall back to require for CommonJS/UMD builds.
	// Note: static import above caused webpack warnings in some quill builds.
	// Attempt to require first (CommonJS/UMD), then try to resolve named/default.
	// eslint-disable-next-line global-require, import/no-dynamic-require
	const required = require('quill');
	Quill = (required && (required.default || required.Quill)) || required;
} catch (e) {
	// If require fails (e.g., ESM-only environment), try namespace import approach
	// eslint-disable-next-line import/no-unresolved
	// Use a non-failing import via a dynamic import Promise is not ideal in this wrapper,
	// so attempt to access window.Quill as the last resort.
	// eslint-disable-next-line no-undef
	Quill = (typeof window !== 'undefined' && window.Quill) || undefined;
}

// Final fallback: if Quill is still undefined, try to import namespace (best-effort)
if (!Quill) {
	try {
		// eslint-disable-next-line import/no-extraneous-dependencies
		const QuillNamespace = require('quill');
		Quill = (QuillNamespace && (QuillNamespace.default || QuillNamespace.Quill)) || QuillNamespace;
	} catch (err) {
		// leave Quill undefined — consumers will error if they actually need it
		Quill = (typeof window !== 'undefined' && window.Quill) || undefined;
	}
}

export default Quill;
export { Quill };
