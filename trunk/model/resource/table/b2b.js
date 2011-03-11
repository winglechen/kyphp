{
    'product'   : {
        'model'         : 'product',
        'primary_key'   : ['id'],
        'foreign_key'   : {
            'company'   : ['company_id','id'],
            'category'  : ['category','id']
        },
        'redundancy'    : {
            'company'   : ['name'] 
        },
    },
    'company'   : {
        'areaId'    : {},
        'area'      : {},
    },
    'category'  : {
    
    }
}
