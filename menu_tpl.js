var MENU_POS = [
{
	// item sizes
	'width': 150,
	'height': 23,
	// menu block offset from the origin:
	//	for root level origin is upper left corner of the page
	//	for other levels origin is upper left corner of parent item
	'block_top': 95,
	'block_left': 20,
	// offsets between items of the same level
	'top': 28,
	'left': 0,
	// time in milliseconds before menu is hidden after cursor has gone out
	// of any items
	'hide_delay': 200,
	'expd_delay': -200,
	'css' : {
		'inner' : 'minner',
		'outer' : ['moout', 'moover']
	}
},
{
	'width': 150,
	'block_top': 15,
	'block_left': 50
},
{
	'block_left': 0
}
]

