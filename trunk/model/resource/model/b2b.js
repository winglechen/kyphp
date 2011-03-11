{
    'company':{
        'id'    : {}, /* 程序生成 */
        'name'  : {
            'required'  : true,
            'regex'     : '//',/* 中文英文 */
            'len'       : '1-100'
        }
    },
    'category':{
        'id'    : {}, /* 程序生成 */
        'name'  : {
            'required'  : true,
            'regex'     : '//',
            'len'       : '1-50'
        }
    },
    'product'   :{
        'id'            : {},
        'company_id'    : {},
        'category_id'   : {},
        'name'          : {
            'required'  : true,
            'regex'     : '//',
            'len'       : '1-50'
        }
    }
}
